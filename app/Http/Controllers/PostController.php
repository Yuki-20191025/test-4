<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $posts = Post::all();
        //dd($posts);
        return view('posts.index',compact('posts'));
    }

    function create()
    {
        return view('posts.create');
    }

    function store(Request $request)
    {
        //dd($request);
        $post = new Post;
        $post -> title = $request -> title;
        $post -> body = $request -> body;
        $post -> user_id  = Auth::id();

        $post ->save();

        return redirect()->route('posts.index');
    }
}
