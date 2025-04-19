<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Bienvenido a Post";
    }

    public function create()
    {
        return "Crear Post";
    }

    public function show($post)
    {
        return "Post " . $post;
    }
}
