<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Models\Ficha;
use Illuminate\Http\Request;
class VistasController extends Controller
{
    //
    public function index(){
        $aprendices = Aprendiz::all();
        return view('aprendicesVista', compact('aprendices'));
      }
}
