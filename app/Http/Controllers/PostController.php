<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){

        // $posts = Post::get(); // this will return a collection
        $posts = Post::paginate(5);
        return view('posts.index',[
            'posts'=> $posts
        ]);

    }
    public function store(Request $request){

        $this->validate($request,[
            'body' =>'required'
        ]);
        // $request->user()->posts()
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        // $request->user()->posts()->create([
        //     'body' => $request->body
        // ]);
        $request->user()->posts()->create($request->only('body'));
        return back();
    }


}
