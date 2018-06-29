<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    //

    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "INV_INS_INSUMOS";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "INS_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'INS_DESC',
        'INS_PRO_RUN',
        'INS_INFO',
        'INS_MARCA',
        'INS_TIPO',
        'INS_CANTIDAD',
        'INS_COSTO',
    ];

    /**
     * Obtiene el proveedor  asociado al insumo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * */
    public function proveedor()
    {
        return $this->hasOne('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
    }
}
