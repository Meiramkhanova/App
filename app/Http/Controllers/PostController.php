<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function main()
    {
        return view('post.main');
    }
    public function band()
    {
        return view('post.band');
    }
    public function tour()
    {
        return view('post.tour');
    }
    public function contact()
    {
        return view('post.contact');
    }
}


















