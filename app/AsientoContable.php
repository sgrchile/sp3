<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsientoContable extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "ASIENTOS_CONTABLES";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_ASIENTO_CONT";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'COMENT_ASIENT',
        'TP_MOVIMIENTO',
        'FECHA_CONT',
        'TOTAL_DEBE',
        'TOTAL_HABER',
        'ID_USUARIO_ASIENTO'
    ];

    /**
     * Get the Asientos for the AsientoCuenta.
     */
    public function asientocta()
    {
        return $this->hasMany('App\AsientoCuenta');
    }
}
