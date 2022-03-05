<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $posts = Post::with('category', 'user')
            ->withCount('comments')
            ->published()
            ->orderBy('created_at', 'DESC')
            ->paginate(2);

        return view('home', compact('posts'));
    }
    public function about()
    {
        $posts = Post::with('category', 'user')
            ->withCount('comments')
            ->published()
            ->orderBy('created_at', 'DESC')
            ->paginate(2);

        return view('about', compact('posts'));
    }
    public function service()
    {
        $posts = Post::with('category', 'user')
            ->withCount('comments')
            ->published()
            ->orderBy('created_at', 'DESC')
            ->paginate(2);

        return view('service', compact('posts'));
    }
    public function contact()
    {
        $posts = Post::with('category', 'user')
            ->withCount('comments')
            ->published()
            ->orderBy('created_at', 'DESC')
            ->paginate(2);

        return view('contact', compact('posts'));
    }
}
