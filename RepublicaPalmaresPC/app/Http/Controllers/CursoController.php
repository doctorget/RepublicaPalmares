<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('curso.curso');
    }

    public function curso()
    {
        return view('curso.cursolista');
    }
}
