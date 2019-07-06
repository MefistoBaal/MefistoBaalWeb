<?php

namespace MefistoBaal\Http\Controllers;

use Illuminate\Http\Request;

class Portafolio extends Controller
{
    public function index()
    {
        try {
            return view('portafolio');
        } catch (\Throwable $th) {
            die('ERROR_INDEX_CONTROLLER_PORTAFOLIO: ' . $th->getMessage());
        }
    }

    public function proyectos($proyecto){
        echo $proyecto;
    }
}
