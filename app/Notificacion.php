<?php

namespace Esports;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
  protected $table='notificacion';
  protected $primaryKey='notificacion';
  public $incrementing = false;

  public $timestamps=false;

  protected $fillable=[
      'usuario',
      'estado',
      'gestion',
      'respuesta',
      'etapa'
  ];

  protected $guarded = [
  ];
}
