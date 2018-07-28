<?php

namespace Esports;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
  protected $table='gestion';
  protected $primaryKey='gestion';
  public $incrementing = false;

  public $timestamps=false;

  protected $fillable=[
      'tipo',
      'usuario',
      'etapa_actual',
      'estado',
      'nombre',
      'descripcion',
      'fecha_hora',
      'lugar',
      'coordinador',
      'proceso'
  ];

  protected $guarded = [
  ];
}
