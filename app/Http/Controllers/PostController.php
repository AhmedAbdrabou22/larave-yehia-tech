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

     public function delete (){
        // $post = Post::findOrFail($id);
        //  $post->delete();
        // return redirect('/post');
        Post::destroy(1);
    }


    public function create(){
        Post::create([
            "title"=>"Keep it short: Aim for 5 to 10 words or under 60 characters so it fits well on search engines.",
            "body"=>"A post title is essential to grab the attention of your visitors to click on your content. In most cases, it is used in the SEO Title as well and plays a crucial role in compelling the searchers to click through the search results.",
            "author"=>"aaa",
            "published"=>true,
        ]);

        return redirect("/post");
    }
}
