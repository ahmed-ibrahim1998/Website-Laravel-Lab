<?php

namespace App\Http\Controllers;

use App\Http\Resources\posts as postsResourec;
use App\Models\Post;
use Illuminate\Http\Request;

class PostssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return $this->sendResponse(postsResourec::collection($posts), 'posts retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $post = Post::create($input);
        return $this->sendResponse(new postsResourec($post), 'Posts created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return $this->sendResponse(new postsResourec($posts), 'Posts retrieved successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        $post->slug = $input['slug'];
        $post->title = $input['title'];
        $post->slug = $input['slug'];
        $post->body = $input['body'];
        $post->version = $input['version'];
        $post->save();

        return $this->sendResponse(new postsResourec($post), 'Posts updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return $this->sendResponse([], 'Posts deleted successfully.');
    }
}
