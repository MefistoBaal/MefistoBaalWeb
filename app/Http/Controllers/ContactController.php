<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'title' => 'Contácto'
        ]);
    }
}
