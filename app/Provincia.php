<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PV_PROVINCIA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "PV_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a Provincia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_PV_COD');
    }
}
