<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostsController extends Controller
{
    public function index(){
        return Inertia::render('welcome', ['posts' => Post::all()]);
    }
}
