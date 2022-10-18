<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function web()
    {
        return view('welcome');
    }

    public function api()
    {
        $posts = DB::table('posts')
        ->select(DB::raw("
            posts.id AS id,
            posts.title AS title,
            posts.category AS category,
            posts.author AS author
        "))
        ->orderBy('posts.category');

        return response()->json($posts->get(), 200);
    }
}
