<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOfertaProveedor extends Model
{
  protected $table = 'ESTP_ESTADO_OFERTA_PROV';
  protected $primaryKey = "ESTP_COD";
  public $timestamps = false;
  protected $fillable = [

  ];

  public function servicio_profesional()
  {
       return $this->hasOne('App\ServicioProfesional', 'STP_ESTP_ID', 'ESTP_COD');
  }

  public function oferta_articulo()
  {
       return $this->hasOne('App\OfertaArticulo', 'OFAR_ID', 'ESTP_COD');
  }

  public function arriendo_maquinaria()
  {
       return $this->hasOne('App\ArriendoMaquinaria', 'ARM_ESTP_ID', 'ESTP_COD');
  }

  public function oferta_servicio()
  {
       return $this->hasMany('App\OfertaServicio', 'ESTP_COD', 'OFSER_ESTP_ID');
  }
}
