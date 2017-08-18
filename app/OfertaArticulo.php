<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfertaArticulo extends Model
{
  protected $table = 'OFAR_OFERTA_ARTICULOS';
  protected $primaryKey = "OFAR_ID";
  public $timestamps = false;
  protected $fillable = [
  'OFAR_ID', 'OFAR_DESC', 'OFAR_RAZON_COBRO', 'OFAR_DIAS_ENTREGA', 'OFAR_HORARIO_ENT_INI', 'OFAR_HORARIO_ENT_FIN',
  'OFAR_CAPACIDAD', 'OFAR_VALOR', 'OFAR_CALIFICACION', 'OFAR_COMENTARIO', 'OFAR_PRO_RUN', 'OFAR_ESTA_ID',
  'OFAR_ESTP_ID', 'OFAR_OR_COD'
  ];

  public function estado_oferta_proveedor()
  {
  return $this->belongsTo('App\EstadoOfertaProveedor', 'ESTP_COD', 'OFAR_ESTP_ID');
  }

  public function estado_oferta_administrador()
  {
  return $this->belongsTo('App\EstadoOfertaAdministrador', 'ESTA_COD', 'OFAR_ESTA_ID');
  }

  public function proveedor()
  {
  return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'OFAR_PRO_RUN');
  }

  public function orientacion()
  {
  return $this->belongsTo('App\Orientacion', 'OR_COD', 'OFAR_OR_COD');
  }
}
