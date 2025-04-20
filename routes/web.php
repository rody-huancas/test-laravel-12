<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, "index"]);

Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/create', [PostController::class, "create"]);
Route::get('/posts/{post}', [PostController::class, "show"]);

Route::get('/prueba', function () {
    $post = Post::find(1);

    return $post->is_active;
});

// Route::get('/prueba', function () {
//     // crea un post
//     // $post = new Post;
//     // $post->title = "Mi PoST nUevo";
//     // $post->content = "Contenido del post";
//     // $post->category = "Programación";
//     // $post->save();

//     // Obtener el registro por su id
//     // $post = Post::find(1);

//     // actualizar resistro
//     /*
//     $post = Post::where("title", "Mi primer post")->first();
//     $post->category = "Programación nuevo";
//     $post->save();
//     */

//     // obtener todos los registros
//     // $post = Post::all();

//     // Obtener los posts cuyo id sea mayor a 1
//     // $post = Post::where("id", ">=", "1")->get();

//     // Obtener los posts ordenados de manera descendente por el id
//     // $post = Post::orderBy("id", "desc")->get();

//     // Obtener los posts ordenados y con campos especficos
//     $post = Post::orderBy("id", "desc")
//         ->select("id", "title", "content")
//         ->get();


//     // eliminar un registro
//     // $post = Post::find(1);
//     // $post->delete();
//     // return "Eliminado";

//     return $post;
// });

// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     if ($category) {
//         return "Post " . $post . " in category " . $category;
//     }

//     return "Post " . $post;
// });
