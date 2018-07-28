<?php

namespace Esports\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{

    public function auntenticar(Request $request){
    	if($request->has("user")&&$request->has("pass")){
	    	$id=DB::table('usuario')->where('correo', $request->user)->first();
	    	//return dd($id);
	    	if($id->password==$request->pass){
        $tabla=DB::table('usuario_permisos')->where('usuario', '=', $id->usuario)->get();
        $permiso1 = 0; $permiso2 = 0; $permiso3 = 0; $permiso4 = 0; $permiso5 = 0; $permiso6 = 0; $permiso7 = 0; $permiso8 = 0;
        foreach ($tabla as $fila) {
          switch ($fila->permiso) {
            case 1:
                $permiso1=1;
                break;
            case 2:
                $permiso2=1;
                break;
            case 3:
                $permiso3=1;
                break;
            case 4:
                $permiso4=1;
                break;
            case 5:
                $permiso5=1;
                break;
            case 6:
                $permiso6=1;
                break;
            case 7:
                $permiso7=1;
                break;
            case 8:
                $permiso8=1;
                break;
          }
        }
	    		if($permiso4==1){
	    			return view('index', ["permiso1"=>$permiso1, "permiso2"=>$permiso2, "permiso3"=>$permiso3,
            "permiso5"=>$permiso5, "permiso6"=>$permiso6, "permiso7"=>$permiso7, "permiso8"=>$permiso8, "usuario"=>$id->usuario]);
	    		}
	    		else{
	    			return 'Error, no tiene permiso de Loguearse';
	    		}
	    	}
	    }
    	return view('login');
    }

    public function permiso1($user){
      if($user>0){
          return view('reportes');
      }else{
	       return view('/');
      }
    }

    public function permiso2($user){
      if($user>0){
          return view('welcome');
      }else{
	       return view('/');
      }
    }

    public function permiso3($user){
      if($user>0){
          $notificaciones=DB::table('notificacion as n')
          ->select('n.notificacion as notificacion','n.gestion as gestion', 'n.etapa as etapa', 'e.nombre as nombre')
          ->join('etapa as e','n.etapa','=','e.etapa')
          ->where('n.estado', '=', 'N')
          ->where('n.usuario', '=', $user)
          ->get();
          $condiciones=DB::table('condicion')
          ->select('etapa', 'respuesta')
          ->get();
          $respuestas=DB::table('respuesta')
          ->select('respuesta', 'descripcion')
          ->get();
          return view('atender', ["notificaciones"=>$notificaciones, "condiciones"=>$condiciones, "respuestas"=>$respuestas]);
      }else{
	       return view('/');
      }
    }

    public function permiso5($user){
      if($user>0){
        return redirect('gestion');
      }else{
	       return view('/');
      }
    }

    public function iniciogestion($user){
      if($user>0){
        return redirect('iniciogestion');
      }else{
	       return view('/');
      }
    }

    public function permiso6($user){
      if($user>0){
          $gestiones=DB::table('gestion')
          ->select('gestion','nombre', 'descripcion', 'tipo', 'proceso', 'etapa_actual')
          ->get();
          return view('gestion.index', ["gestiones"=>$gestiones]);
      }else{
	       return view('/');
      }
    }

    public function permiso7($user){
      if($user>0){
          return view('welcome');
      }else{
	       return view('/');
      }
    }

    public function permiso8($user){
      if($user>0){
        $procesos=DB::table('proceso')
        ->select('proceso','nombre', 'descripcion', 'fecha_creacion', 'fecha_vigencia', 'tipo', 'modulo', 'etapa_inicial')
        ->get();
        return view('proceso.index', ["procesos"=>$procesos]);
      }else{
	       return view('/');
      }
    }
}
