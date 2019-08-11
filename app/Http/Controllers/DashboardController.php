<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Administración',
        ]);
    }

    public function login()
    {
        return view('loginadmin', [
            'title' => 'Iniciar sesión'
        ]);
    }
}