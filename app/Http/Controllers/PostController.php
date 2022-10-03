<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }
    public function create(){
        //return view with a form
        return view('post.create');
    }
    public function store(Request $req){

        // save a post with title and content to DATABASE
      Post::create([
            'title' => $req->title,
           'content'=> $req->content,
     ]);

        $post->title = $req->title;
        $post->content = $req->content;
        return redirect()->route('post.index');
        }
    public function  show($id){
        return view('post.show',['postId'=>$id]);
    }
}
