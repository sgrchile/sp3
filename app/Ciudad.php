<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CIU_CIUDAD";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CIU_COD";

    protected $fillable = ['CIU_DESC', 'CIU_PV_COD'];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a Ciudad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_CIU_COD');
    }

    /**
     * Obtiene el Cliente asociado a Ciudad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'CLI_CIUDAD');
    }

}
