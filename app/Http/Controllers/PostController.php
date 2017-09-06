<?php

namespace App\Http\Controllers;

use App\Post; // Modelo 

class PostController extends Controller
{
	public function welcome(){
		return view('welcome');
	}

	public function about(){
		return view('about_us');
	}

	public function index(){
		$posts = Post::all(); 
		return view('posts.index')->with('posts', $posts);

	}

	public function show(Post $post){ //Extrae automaticamente el registro 
		//$post = Post::find($id);
		/*$post->body = '';
		dd($post);
		$post->save();*/

		return view('posts.show', compact('post'));

	}

}
