<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TEMPERATURA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "id_temp";

    protected $fillable = ['desc_temp'];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
