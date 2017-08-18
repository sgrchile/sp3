<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    //
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "INV_FP_FORMA_DE_PAGO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "FP_ID";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'FP_DESC'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

}
