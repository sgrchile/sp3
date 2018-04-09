<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = 'CCONTACTO';

    protected $fillable = ['CONT_CLI_ID','CONT_NOM','CONT_CEL','CONT_EMAIL','CONT_EMAIL_EMP','CONT_EMP','CONT_SUCURSAL','CONT_CARGO',
'CONT_AREA',
'CONT_CREADO_POR',
'CONT_DIRECCION',
'CONT_PAIS',
'CONT_PROVINCIA',
'CONT_CIUDAD',
'CONT_REGION',
'CONT_ZIP',
'CONT_FECH_NAC',
'CONT_ESTADO',
'CONT_COMENTARIO'];

    /**
     * Llave primaria de la tabla
     *
     * @var integer
     */
    protected $primaryKey = "ID_CONT";

    //public $primarykey = 'CONT_CLI_ID';
}
