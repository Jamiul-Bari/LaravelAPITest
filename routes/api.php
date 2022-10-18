<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', function() {
    $posts= DB::table('posts')
        ->select(DB::raw("
            posts.id AS id,
            posts.title AS title,
            posts.category AS category,
            posts.author AS author
        "))
        ->orderBy('posts.category');

    return response()->json($posts->get(), 200);
});
