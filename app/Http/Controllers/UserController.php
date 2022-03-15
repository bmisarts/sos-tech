<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Comment;
use App\Post;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }
    public function profile()
    {
        return view('user.profile');
    }


    public function dashboard()
    {
        $posts      = Post::count();
        $comments   = Comment::count();
        $categories = Category::count();
        $users = User::count();

        return view('user.dashboard', get_defined_vars());
    }

    public function posts()
    {
        $posts = Post::with(['user', 'category', 'comments'])
            ->paginate(10);

        return view('user.posts', compact('posts'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('user.categories', compact('categories'));
    }

    public function comments()
    {
        $comments = Comment::with(['user', 'post'])->paginate(10);

        return view('user.comments', compact('comments'));
    }
}
