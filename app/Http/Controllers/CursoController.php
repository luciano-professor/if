<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listar()
    {
        return view('admin.cursos.listar');
    }

    public function adicionar()
    {
        return view('admin.cursos.form');
    }
}
