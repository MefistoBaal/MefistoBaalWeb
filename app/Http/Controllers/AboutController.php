<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'Acerca de mi'
        ]);
    }
}
