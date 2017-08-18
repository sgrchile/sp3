<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfertaServicio extends Model

{
protected $table = 'OFSER_OFERTA_SERVICIO';
protected $primaryKey = "OFSER_COD";
public $timestamps = false;
protected $fillable = [
'OFSER_COD', 'OFSER_DESCRIPCION', 'OFSER_DIAS_LABORALES', 'OFSER_HORARIOS_TRABAJO_INI', 'OFSER_HORARIOS_TRABAJO_FIN',
'OFSER_COBERTURA_SERVICIO', 'OFSER_RAZ_COBRO', 'OFSER_VALOR', 'OFSER_CALIFICACION', 'OFSER_COMENTARIO', 'OFSER_PRO_RUN',
'OFSER_ESTA_ID', 'OFSER_ESTP_ID', 'OFSER_OR_COD'
];

public function proveedor()
  {
    return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'OFSER_PRO_RUN');
  }

public function orientacion()
  {
    return $this->belongsTo('App\Orientacion', 'OR_COD', 'OFSER_OR_COD');
  }

public function estado_oferta_proveedor()
  {
    return $this->belongsTo('App\EstadoOfertaProveedor', 'OFSER_ESTP_ID', 'ESTP_COD');
  }

public function estado_oferta_administrador()
  {
    return $this->belongsTo('App\EstadoOfertaAdministrador', 'ESTA_COD', 'OFSER_ESTA_ID');
  }
}
