<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte6Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $preguntas=DB::select("call reporte6()");
      return view('reporte6.index', ["preguntas"=>$preguntas]);
    }
  }

}
