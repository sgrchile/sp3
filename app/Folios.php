<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folios extends Model
{
    //
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "FOLIO_EMP";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_FOL";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'FOL_DOC',
        'FOL_ID_EMP',
        'FOL_ULT'
    ];
}
