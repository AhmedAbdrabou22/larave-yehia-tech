<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Tag::all();

        return view('tag.index',["tags"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         Tag::create([
            "title"=>"CSS",
        ]);

        return redirect("/tag");
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
        $post2= Post::find($id);
        $post2->tags()->attach([4]);


        return response()->json([
            "Post"=>Post::find($id)->with('tags')->get(),
            // "Tag"=>Tag::find(1)->posts,
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
