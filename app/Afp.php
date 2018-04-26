<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afp extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "AFP";

    protected $fillable = ['AFP_NOMBRE'];

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "AFP_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
