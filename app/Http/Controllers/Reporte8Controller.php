<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte8Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $preguntas=DB::select("call reporte8()");
      return view('reporte8.index', ["preguntas"=>$preguntas]);
    }
  }

}
