<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "SL_SALUD";

    protected $fillable = ['SALUD_NOMBRE'];

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "SALUD_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
