<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BroadCastNotification;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'search', 'show']);
    }
    
    public function index(Request $request)
    {
        $posts = Post::orderBy('posts.created_at', 'DESC')
            ->with('comments','category', 'user')
            ->published()
            ->paginate(5);
        $r_posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
        $categories = Category::get();
        return view('blog', compact('posts', 'r_posts', 'categories'));
    }

    public function search(Request $request)
    {
        $this->validate($request, ['query' => 'required']);

        $query = $request->get('query');

        $posts = Post::where('title', 'like', "%{$query}%")
            ->orWhere('body', 'like', "%{$query}%")
            ->with('category', 'user')
            ->withCount('comments')
            ->published()
            ->orderBy('posts.created_at', 'DESC')
            ->paginate(5);

            $r_posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
            $categories = Category::get();
            return view('post.search', compact('posts', 'r_posts', 'categories'));
    }

    public function show($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        $post = $post->load(['comments.user', 'user', 'category']);

        $post->comments =  $post->comments()->orderBy('created_at', 'desc')->get();
        $r_posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
        $categories = Category::get();
        return view('post.show', compact('post', 'r_posts', 'categories'));
    }

    public function comment(Request $request, Post $post)
    {
        $this->validate($request, ['body' => 'required']);

        $post->comments()->create([
            'user_id'   => auth()->id(),
            'body'      => $request->body           
        ]);

        session()->flash('message', 'Comment successfully created.');

        return redirect("/posts/{$post->id}");
            
    }

    public function create()
    {
        $categories = Category::get();
        return view('user.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|max:250',
            'body'       => 'required|min:50',
            'category'   => 'required|exists:categories,id',
            'publish'    => 'accepted'
        ]);
        $datas = $request->all();
        if (isset($datas['image'])) {
            $imageName = time() . '.' . $datas['image']->getClientOriginalExtension();
            $datas['image']->move('assets/images/blog', $imageName
            );
            $datas['image'] = 'assets/images/blog/'. $imageName;
        }
        else{
            $datas['image'] = 'assets/images/blog/default.jpg';
        }
        $datas['title'] = $request->title;
        $datas['body'] = $request->body;
        $datas['user_id'] = auth()->id();
        $datas['category_id'] = $request->category;
        $datas['is_published'] = $request->has('publish');
        $post = Post::create($datas);

        $datas = $post->load('user', 'category');
        $users = User::select('email')->get();
        foreach($users as $user){
            Mail::to($user->email)->send(new BroadCastNotification($datas));
        }
        session()->flash('message', 'Post created successfully.');

        return redirect()->route('posts');
    }

    public function edit(Post $post)
    {
        if($post->user_id != auth()->user()->id && auth()->user()->isNotAdmin()) {

            session()->flash('message', "You can't edit other peoples post.");

            return redirect()->route('posts');
        }

        $categories = Category::get();
        return view('user.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        if($post->user_id != auth()->user()->id && auth()->user()->isNotAdmin()) {

            session()->flash('message', "You can't update other peoples post.");

            return redirect()->route('user.posts');
        }

        $request->validate([
            'title'      => 'required|max:250',
            'body'       => 'required|min:50',
            'category'   => 'required|exists:categories,id',
            'publish'    => 'accepted'
        ]);

        $post->update([
            'title'       => $request->title,
            'body'        => $request->body,
            'category_id' => $request->category,
            'is_published'  => $request->has('publish'),
        ]);

        session()->flash('message', 'Post updated successfully.');

        return redirect()->to("/posts/$post->id");
    }

    public function destroy(Post $post)
    {
        if($post->user_id != auth()->user()->id && auth()->user()->isNotAdmin()) {

            session()->flash('message', "You can't delete other peoples post.");

            return redirect()->route('posts');
        }

        $post->delete();

        session()->flash('message', 'Post deleted successfully.');

        return redirect()->route('posts');
    }
}
