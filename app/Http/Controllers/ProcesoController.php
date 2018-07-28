<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Esports\Proceso;

class ProcesoController extends Controller
{
  public function destroy($id)
  {
      $proceso=Proceso::findOrFail($id);
      $proceso->delete();
      $procesos=DB::table('proceso')
      ->select('proceso','nombre', 'descripcion', 'fecha_creacion', 'fecha_vigencia', 'tipo', 'modulo', 'etapa_inicial')
      ->get();
      return view('proceso', ["procesos"=>$procesos]);
  }
}
