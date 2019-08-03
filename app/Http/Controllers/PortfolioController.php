<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'title' => 'Portafolio de Servicios'
        ]);
    }

    public function projects($project)
    {
        return $project;
    }
}
