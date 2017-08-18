<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolioOrdenCompra extends Model
{
    //
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "INV_FOL_FOLIO_ORDEN_DE_COMPRA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "FOL_COD";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'FOL_N_FOLIO',
        'FOL_EMP_ID',
        'FOL_OC_COD'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la empresa  asociada al folio de la orden
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Empresa()
    {
        return $this->hasOne('App\ordenDeCompra', 'EMP_ID', 'EMP_EMPRESA');
    }

    /**
     * Obtiene la empresa compra asociado a la ordne de compra
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ordenDeCompra()
    {
        return $this->hasOne('App\ordenDeCompra', 'OC_COD', 'INV_OC_ORDEN_DE_COMPRA');
    }
}
