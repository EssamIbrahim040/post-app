<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{
    public function index() {
        $posts= post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => ['required' , 'string' , 'min:3'],
            'description' => ['required' , 'string' , 'max:1500'],
            'user_id' => ['required' , 'exists:users,id' ]
        ]);

        $post = new post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();

        return back()->with('success','Post Added Successfuly');
        // dd($request->all());
    }

    public function show($id) {
        $post = post::findOrFail($id);
        return view('posts.show',['post' => $post]);
    }

    public function edit($id) {
        $post = post::findOrFail($id);
        return view('posts.edit',['post' => $post]);
    }

    public function update($id,Request $request) {
        $post = post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect()->route('index')->with('success','Post Updated Successfuly');
    }

    public function destroy($id){
        $post = post::findOrFail($id);
        $post->delete();
        return back()->with('success','Post Deleted Successfuly');
    }


    // show data inside the home blade

    public function homePage() {
        $posts= post::all();
        return view('home', ['posts' => $posts]);
    }
}
