<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaSala extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "RESERVA_SALA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_RESERVA";

    protected $fillable = [
        'RES_SALA',
        'RES_MOTIVO',
        'RES_DESC',
        'RES_FECHA',
        'RES_HR_INICIO',
        'RES_HR_FIN',
        'ID_RESERVANTE',
        'RES_EMP',
    ];
}
