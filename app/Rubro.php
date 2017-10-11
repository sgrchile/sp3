<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "RUB_RUBRO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "RUB_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a Rubro
     *proveed
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_RUB_COD');
    }
}