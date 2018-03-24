<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp_Cuenta extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TP_CUENTA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_TP_CUENTA";

    protected $fillable = ['DESC_TP_CUENTA'];
}
