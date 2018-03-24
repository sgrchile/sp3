<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoProducto extends Model
{

    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_PRODUCTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_PROD";

    protected $fillable = ['DESC_EST_PROD'];


}
