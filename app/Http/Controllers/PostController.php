<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function debug(Request $req)
    {
        var_dump($req->except(['_token']));
        $post = new Post();
        $post->create($req->except(['_token']));


        //$post->title = $req->title;
        //$post->subtitle = $req->subtitle;
        //$post->content = $req->content;
        //$post->save();
    }
}
