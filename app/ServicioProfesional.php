<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioProfesional extends Model
{
  protected $table = 'STP_SERVICIOS_TECNICOS_PROFESIONALES';
  protected $primaryKey = "STP_COD";
  public $timestamps = false;
  protected $fillable = [
    'STP_COD', 'STP_DESCRIPCION', 'STP_FORMACION', 'STP_FORMACION_ESTABLECIMIENTO', 'STP_CARRERA', 'STP_ANHOS_EXPERIENCIA',
    'STP_FORTALEZAS', 'STP_DEBILIDADES', 'STP_DESC_EXP_LABORAL', 'STP_BUSC_O_OF', 'STP_CURSOS_PST_GRADOS', 'STP_COB_SERV',
    'STP_OFREZCO', 'STP_VALOR', 'STP_CALIFICACION', 'STP_COMENTARIO', 'STP_PRO_RUN', 'STP_ESTA_ID', 'STP_ESTP_ID', 'STP_OR_COD'
  ];

  public function proveedor()
    {
      return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'STP_PRO_RUN');
    }

  public function orientacion()
    {
      return $this->belongsTo('App\Orientacion', 'OR_COD', 'STP_OR_COD');
    }

  public function estado_oferta_proveedor()
    {
      return $this->belongsTo('App\EstadoOfertaProveedor', 'ESTP_COD', 'STP_ESTP_ID');
    }

  public function estado_oferta_administrador()
    {
      return $this->belongsTo('App\EstadoOfertaAdministrador', 'ESTA_COD', 'STP_ESTA_ID');
    }


}
