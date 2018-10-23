<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }
  // App\Posts $posts
    public function show()
    {
        return view('post.show');
    }
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
        return view('post.store');
    }
    public function edit()
    {
        return view('post.edit');
    }
    public function update()
    {
        return view('post.update');
    }
    public function delete()
    {
        return view('post.delete');
    }
}
