<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view("comments.index",["comments"=>$comments]);
    }

    public function create(){
        Comment::create([
            'content'=>"Yaaaaaaa",
            "author"=>"Ahmed Abdrabou",
            "post_id"=>1,
        ]);

        return redirect("/comments");
    }
}
