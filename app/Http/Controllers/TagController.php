<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $data = Tag::all();

        return view('tag.index',["tags"=>$data]);
    }



    public function create(){
        Tag::create([
            "title"=>"CSS",
        ]);

        return redirect("/tag");
    }


     public function testTags (){
        $post2= Post::find(2);
        $post2->tags()->attach([4]);

        // return response()->json([
        //     $post2->tags,
        // ]);

        return response()->json([
            "Post"=>Post::find(2)->with('tags')->get(),
            // "Tag"=>Tag::find(1)->posts,
        ]); 
    }
}
