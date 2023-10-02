<?php

namespace App\Http\Controllers\Lawyer\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postList(){
        return view('lawyer.post.post-list');

    }
}
