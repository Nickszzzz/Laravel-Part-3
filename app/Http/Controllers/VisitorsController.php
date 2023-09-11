<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class VisitorsController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('welcome',[
            'posts' => $posts
        ]);
    }

    public function singleBlog(int $id) {
        $post = Post::find($id);
        return view('single-blog', [
            'post'=> $post
        ]);
    }
}
