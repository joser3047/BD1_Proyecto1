<?php

namespace Esports;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
  protected $table='proceso';
  protected $primaryKey='proceso';
  public $incrementing = false;

  public $timestamps=false;

  protected $fillable=[
      'nombre',
      'fecha_creacion',
      'fecha_vigencia',
      'descripcion',
      'tipo',
      'modulo',
      'etapa_inicial'
  ];

  protected $guarded = [
  ];
}
