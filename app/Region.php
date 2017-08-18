<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
   	/**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "REG_REGION";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "REG_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_REG_COD');
    }
}
