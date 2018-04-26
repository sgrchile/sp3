<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BancoCuentas extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "BCO_BANCO_CUENTAS";

    protected $fillable = ['CUENTA_NAME'];

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CUENTA_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
