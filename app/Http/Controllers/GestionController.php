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

class GestionController extends Controller
{
      public function __construct()
      {

      }

      public function index(Request $request)
      {
          if($request){ //si existe el objeto
            $procesos=DB::table('proceso')
            ->select('proceso', 'nombre')
            ->get();
            $etapas=DB::table('etapa')
            ->select('etapa', 'nombre')
            ->get();
            return view('gestion.create', ["procesos"=>$procesos, "etapas"=>$etapas]);
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
          $gestion = new Gestion;
          $gestion->tipo=$request->get('tipo');
          $gestion->usuario=$request->get('usuario');
          $gestion->etapa_actual=$request->get('etapa_actual');
          $gestion->estado="creado";
          $gestion->nombre=$request->get('nombre');
          $time = Carbon::now('America/Lima');
          $gestion->fecha_hora=$time->toDateTimeString();

          $gestion->descripcion=$request->get('descripcion');
          $gestion->lugar=$request->get('lugar');
          $gestion->coordinador=$request->get('coordinador');
          $gestion->proceso=$request->get('proceso');
          $gestion->save();

          return Redirect::to('/');
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
