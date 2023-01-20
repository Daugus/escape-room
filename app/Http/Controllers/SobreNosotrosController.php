<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sobre-nosotros.index');
    }
}
