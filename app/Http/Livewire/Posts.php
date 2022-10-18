<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class Posts extends Component
{
    public function getRandomStr()
    {
        return (string) Str::uuid();
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', '=', $id)->delete();
    }

    public function render()
    {
        $posts = DB::table('posts')
        ->select(DB::raw("
            posts.id AS id,
            posts.title AS title,
            posts.category AS category,
            posts.author AS author
        "))
        ->orderBy('posts.category')
        ->get();

        $data = [
            'posts' => $posts
        ];

        return view('livewire.posts', $data);
    }
}
