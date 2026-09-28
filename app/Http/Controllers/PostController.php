<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::all();

        return view('post.index',["posts"=>$data]);
    }

    public function show ($id){
        $post = Post::findOrFail($id);
        return view("post.show",["post"=>$post]);
    }

     public function delete ($id){
        $post = Post::findOrFail($id);
         $post->delete();
        return redirect('/post');
    }


    public function create(){
        Post::create([
            "title"=>"aaa",
            "body"=>"aaa",
            "author"=>"aaa",
            "published"=>true,
        ]);

        return redirect("/post");
    }
}
