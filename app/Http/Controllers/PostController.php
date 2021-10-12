<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post($pos)
    {
        $post = Post::query()->where('slug', $pos)->get();
        return view('temp_post', ['post' => $post]);

    }
    public function output(){

        return view('post',['post' => Post::all()]);
    }
}
