<?php

namespace App\Http\Controllers\Lawyer\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postList(){

        $posts = Post::with('user')->orderBy('created_at','desc')->get();
        // return $posts;
        return view('lawyer.post.post-list',get_defined_vars());
    }
}
