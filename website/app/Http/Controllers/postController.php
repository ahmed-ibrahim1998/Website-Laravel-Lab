<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function postindex(){
        $posts = [
            "b1"=> ["title"=> "Post1", "body"=> "Hello In Body 1"],
            "b2"=> ["title"=> "post2", "body"=> "Hello In Body 2"],
            "b3"=> ["title"=> "post3", "body"=> "Hello In Body 3"],
        ];
        return view('otherpage.post', ["data"=> $posts]);

    }

    public function show($postid){
        $posts = [
            "b1"=> ["title"=> "Post1", "body"=> "Hello In Body 1"],
            "b2"=> ["title"=> "post2", "body"=> "Hello In Body 2"],
            "b3"=> ["title"=> "post3", "body"=> "Hello In Body 3"],
        ];
        if(array_key_exists($postid, $posts)){
            return view('otherpage.showposts', ["data"=> $posts[$postid]]);
        }else{
//            abort(404);
             return redirect("/post");
        }
    }

}
