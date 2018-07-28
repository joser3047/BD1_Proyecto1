<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte1Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $preguntas=DB::select("call reporte1()");
      return view('reporte1.index', ["preguntas"=>$preguntas]);
    }
  }

}
