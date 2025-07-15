<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index() {
        return view('dashboard', [
            'posts' => Post::all()
        ]);}
}