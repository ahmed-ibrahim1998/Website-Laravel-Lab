<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ResourcPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $post = Post::all();
        return view("Posts.index", ["data"=> $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max: 10',
            'slug'=>'required|string|',
            'body'=>'required|string',
            'version'=>'numeric'
        ]);
//        Post::create($request->all()); //save database --> model $fillable
//        return redirect()->route('');

        $post = $request->all(); // body + title + slug
        $post['user_id'] = auth()->user()->id;
//         dd($post);
        Post::create($post); // body + title + user_id

        // Post::create($request->all()); //save database
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
//        dd($post);
//        $post = new Post;
//        $post = $post->findorfail($id);
        return view('Posts.show',["data"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("Posts.edit", ["data"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=>'required|max: 10',
            'slug'=>'required|string|',
            'body'=>'string',
            'version'=>'numeric'
        ]);
        $post->update($request->all());
        return view("Posts.show", ["data"=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
