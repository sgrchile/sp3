<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "MN_MENUS";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "MENU_ID";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'MENU_NAME','MENU_URL','MENU_PARENT','MENU_EXTERNAL'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
