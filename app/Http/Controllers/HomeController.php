<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBY('id', 'desc')->where('user_id', Auth::id())->get();
        return view('home')->withPosts($posts);
    }

    public function post()
    {
        return view('post');
    }

    public function stores(Request $request)
    {
        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->decp;
        $post->user_id=$request->user_id;
        $post->category_id=$request->catagory_id;
        $post->save();

        return redirect()->route('index');
    }
}
