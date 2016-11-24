<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function index(){

    	$posts = Post::all();



    	 return view('index', ['posts' => $posts]);
    }


    public function show($id){
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }


    public function create(){
    	return view('posts.create');
    }

    public function store(Request $request){
        

        $post = new Post;
        $id = Auth::id();
        $clean_title = clean($request->title);
        $clean_body = clean($request->editor1);
      
        $post->title = $clean_title;
        $post->body = $clean_body;
        $post->user_id = $id;
        $post->save();

        return redirect('/');



    }


    public function edit($id){

    	$post = Post::find($id);
    	return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, $id){

        $post = Post::find($id); 
        $post->title = $request->title;
        $post->body = $request->editor1;
        $post->save();
        return redirect('/');

    }


    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/home');
    }




}
