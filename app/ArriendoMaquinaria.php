<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArriendoMaquinaria extends Model
{
  protected $table = 'ARM_ARRIENDO_MAQUINARIA';
  protected $primaryKey = "ARM_ID";
  public $timestamps = false;
  protected $fillable = [
  'ARM_ID', 'ARM_DESCRIPCION', 'ARM_TP_VEHICULO', 'ARM_MARCA', 'ARM_ANHO', 'ARM_SEGUROS_ASOCIADOS', 'ARM_OPERARIO',
  'ARM_LICENCIAS_CONDUCIR', 'ARM_CURSOS', 'ARM_DIAS_LABORALES', 'ARM_HOR_INI', 'ARM_HOR_FIN',
  'ARM_COB_SERVICIO', 'ARM_RAZON_COBRO', 'ARM_VALOR', 'ARM_CALIFICACION', 'ARM_COMENTARIO',
  'ARM_PRO_RUN', 'ARM_ESTA_ID', 'ARM_ESTP_ID', 'ARM_OR_COD','ARM_DESCRIPCION'
];

public function proveedor()
  {
    return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'ARM_PRO_RUN');
  }

public function orientacion()
  {
    return $this->belongsTo('App\Orientacion', 'OR_COD', 'ARM_OR_COD');
  }

public function estado_oferta_proveedor()
  {
    return $this->belongsTo('App\EstadoOfertaProveedor', 'ESTP_COD', 'ARM_ESTP_ID');
  }

public function estado_oferta_administrador()
  {
    return $this->belongsTo('App\EstadoOfertaAdministrador', 'ESTA_COD', 'ARM_ESTA_ID');
  }

}
