<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services', [
            'title' => 'Servicios'
        ]);
    }
}