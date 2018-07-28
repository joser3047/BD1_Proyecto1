<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use Esports\Http\Requests;
use Esports\Notificacion;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class AtenderController extends Controller
{
      public function __construct()
      {

      }

      public function index(Request $request)
      {

      }

      public function create()
      {

      }

      public function store(Request $request)
      {
          $notificacion=Notificacion::findOrFail($request->get('notificacion'));
          $notificacion->estado='R';
          $notificacion->respuesta=$request->get('respuesta');
          $notificacion->update();

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

      }
}
