<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PAI_PAIS";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "PAI_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a Pais
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_PAI_COD');
    }
}
