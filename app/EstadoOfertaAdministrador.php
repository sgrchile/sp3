<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOfertaAdministrador extends Model
{
    protected $table = 'ESTA_ESTADO_OFERTAS_ADMIN';
    protected $primaryKey = "ESTA_COD";
    public $timestamps = false;
    protected $fillable = [

    ];

    public function servicio_profesional()
    {
         return $this->hasOne('App\ServicioProfesional', 'STP_ESTA_ID', 'ESTA_COD');
    }

    public function oferta_articulo()
    {
         return $this->hasOne('App\OfertaArticulo', 'OFAR_ESTA_ID', 'ESTA_COD');
    }

    public function arriendo_maquinaria()
    {
         return $this->hasOne('App\ArriendoMaquinaria', 'ARM_ESTA_ID', 'ESTA_COD');
    }

    public function oferta_servicio()
    {
         return $this->hasOne('App\OfertaServicio', 'OFSER_ESTA_ID', 'ESTA_COD');
    }
}
