<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'Blog'
        ]);
    }
}
