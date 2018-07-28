<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte4Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $query = trim($request->get('modulo'));
      $query2 = trim($request->get('proceso'));
      $preguntas=DB::select("call reporte4(?, ?)",[$query,$query2]);
      return view('reporte4.index', ["preguntas"=>$preguntas]);
    }
  }

}
