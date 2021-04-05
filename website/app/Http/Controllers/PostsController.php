<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $post = new Post;
        $post = $post->all();
        return view("Posts.index", ["data"=> $post]);
    }
    public function create(){
        return view("posts.create");
    }
    public function store() {
        $post = new Post;
        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');
        $post->version = request('version');
        $post->save();
        return redirect()->route('posts.index');
    }
    public function show($id) {
        $post = new Post;
        $post = $post->findorfail($id);
        return view('Posts.show',["data"=>$post]);
    }
    public function edit($id) {
        $post = new Post;
        $post  = $post->find($id);
        return view('Posts.edit',["data"=>$post]);
    }
    public function update($id) {
        $post = new Post;
        $post = $post->findorfail($id);
        // dd(request());
        $post->title = request("title");
        $post->slug = request("slug");
        $post->body = request("body");
        $post->version = request("version");
        $post->save();
        return view("Posts.show", ["data"=>$post]);
    }
    public function destroy($id) {
        $post = new Post;
        $post = $post->find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
