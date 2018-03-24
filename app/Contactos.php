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

    protected $fillable = ['CONT_CLI_ID','CONT_NOM','CONT_CEL','CONT_EMAIL','CONT_EMAIL_EMP','CONT_EMP','CONT_SUCURSAL'];

    /**
     * Llave primaria de la tabla
     *
     * @var integer
     */
    protected $primaryKey = "ID_CONT";

    //public $primarykey = 'CONT_CLI_ID';
}
