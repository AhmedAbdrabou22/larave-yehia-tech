<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $comments = Comment::all();
        // return view("comments.index",["comments"=>$comments]);
        return response()->json([
            "comments"=>$comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       Comment::create([
            'content'=>"Yaaaaaaa",
            "author"=>"Ahmed Abdrabou",
            "post_id"=>4,
        ]);

        // return redirect("/comments");
        return response()->json([
            "message"=>"Comment created successfully"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return response()->json([
        "data" => Comment::find($id)
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
