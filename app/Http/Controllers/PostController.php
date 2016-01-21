<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index() {
    	$posts = Post::all();
    	return view('home', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('single', compact('post'));
    }

    public function create() {
    	return view('create');
    }

    public function store(Request $request) {
    	$save = new Post;
    	$save->title = $request->get('title');
    	$save->desc = $request->get('desc');
    	$save->content = $request->get('content');
        $save->save();
        $id = $save->id;
        return redirect()->route('post.show',$id);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);        
        $post->title = $request->get('title');
        $post->desc = $request->get('desc');
        $post->content = $request->get('content');
        $post->save();
        return redirect()->route('post.show', $id);
    }

    public function delete($id) {
        $delete = Post::find($id)->delete();
        return redirect()->route('post.index');
    }

}
