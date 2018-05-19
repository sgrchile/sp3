<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVenta extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TP_VENTA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_TP_VENTA";

    protected $fillable = ['DESC_TP_VENTA'];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
