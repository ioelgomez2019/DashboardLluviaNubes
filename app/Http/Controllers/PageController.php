<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function love()
    {
        return view('love');
    }

    public function musica()
    {
        return view('musica');
    }
}
