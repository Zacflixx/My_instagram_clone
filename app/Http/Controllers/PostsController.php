<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth');
    }
//     this makes sure users are logged in first
    
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data = request()->validate([
            'caption'=> 'required',
            'image' => ['required','image'],

        ]);
        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
