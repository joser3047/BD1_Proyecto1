<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReporteController extends Controller
{
  public function reporte1(){
    return redirect('reporte1p');
  }

  public function reporte2(){
    return view('reporte2.search');
  }

  public function reporte3(){
    return view('reporte3.search');
  }

  public function reporte4(){
    return view('reporte4.search');
  }

  public function reporte5(){
    return view('reporte5.search');
  }

  public function reporte6(){
    return redirect('reporte6p');
  }

  public function reporte7(){
    return redirect('reporte7p');
  }

  public function reporte8(){
    return redirect('reporte8p');
  }

  public function reporte9(){
    return view('reporte9.search');
  }
}
