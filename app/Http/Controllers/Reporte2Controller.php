<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte2Controller extends Controller
{
  public function index(Request $request)
  {
    if($request){ //si existe el objeto=
      $query = trim($request->get('modulo'));
      $query2 = trim($request->get('proceso'));
      $preguntas=DB::select("call reporte2(?, ?)",[$query,$query2]);
      return view('reporte2.index', ["preguntas"=>$preguntas]);
    }
  }

}
