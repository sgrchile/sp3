<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientacion extends Model
{
  protected $table = 'OR_ORIENTACION';
  protected $primaryKey = "OR_COD";
  public $timestamps = false;
  protected $fillable = [

  ];

  public function servicio_profesional()
  {
       return $this->hasOne('App\ServicioProfesional', 'STP_OR_COD', 'OR_COD');
  }

  public function oferta_articulo()
  {
       return $this->hasOne('App\OfertaArticulo', 'OFAR_OR_COD', 'OR_COD');
  }

  public function arriendo_maquinaria()
  {
       return $this->hasOne('App\ArriendoMaquinaria', 'ARM_OR_COD', 'OR_COD');
  }

  public function oferta_servicio()
  {
       return $this->hasOne('App\OfertaServicio', 'OFSER_OR_COD', 'OR_COD');
  }
}
