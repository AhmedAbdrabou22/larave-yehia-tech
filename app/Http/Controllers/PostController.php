<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::paginate(10);

        return view('post.index', ["posts" => $data]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("post.show", ["post" => $post]);
    }

    public function delete()
    {
        // $post = Post::findOrFail($id);
        //  $post->delete();
        // return redirect('/post');
        Post::destroy(1);
    }


    public function create()
    {
        Post::factory(100)->create();
        return redirect("/post");
    }

    public function postATags($id)
    {
        $post = Post::findOrFail($id);
        return response()->json([
            "Post" => $post,
            "Tags" => $post->tags,
        ]);
    }
}
