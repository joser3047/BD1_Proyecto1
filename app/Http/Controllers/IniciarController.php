<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Esports\Http\Requests;
use Esports\Gestion;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class IniciarController extends Controller
{
      public function __construct()
      {

      }

      public function index(Request $request)
      {
          if($request){ //si existe el objeto
            $gestiones=DB::table('gestion')
            ->select('gestion', 'tipo', 'nombre')
            ->get();
            return view('iniciar', ["gestiones"=>$gestiones]);
          }
          /*
          $gestions=DB::table('pregunta')->paginate(7);
          return view('pregunta.index', ["preguntas"=>$gestions]);
          */
      }

      public function create()
      {
      }

      public function store(Request $request)
      {
        $query = trim($request->get('gestion'));
        $preguntas=DB::select(("call avanzar(?)",[$query]);
        return view('/');
      }

      public function show($id)
      {

      }

      public function edit($id)
      {
      }

      public function update(PreguntaFormRequest $request, $id)
      {
      }

      public function destroy($id)
      {
          $gestion=Gestion::findOrFail($id);
          $gestion->delete();
          $gestiones=DB::table('gestion')
          ->select('gestion','nombre', 'descripcion', 'tipo', 'proceso', 'etapa_actual')
          ->get();
          return view('gestion.index', ["gestiones"=>$gestiones]);
      }
}
