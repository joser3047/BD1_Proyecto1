<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte7Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $preguntas=DB::select("call reporte7()");
      return view('reporte7.index', ["preguntas"=>$preguntas]);
    }
  }

}
