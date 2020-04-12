<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $getPost = Post::OrderBy("id", "DESC")->paginate(10);
        $out = [
            "message" => "list_post",
            "results" => $getPost
        ];

        return response()->json($out, 200);
    }
}   