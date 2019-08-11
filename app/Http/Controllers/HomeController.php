<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index',[
            'title'=>'MefistoBaal'
        ]);
    }
}
