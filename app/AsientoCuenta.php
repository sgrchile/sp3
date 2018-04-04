<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsientoCuenta extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "ASIENTO_CUENTA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_ASIENTO_CTA";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'ID_CTA_CONT',
        'ASIENTO_DEBE',
        'ASIENTO_HABER',
        'ID_ASIENTO_CONT'
    ];

    /**
     * Get the Asientos the AsientoContable.
     */
    public function asientoscont()
    {
        return $this->belongsTo('App\AsientoContable');
    }

}
