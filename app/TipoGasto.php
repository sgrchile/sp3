<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGasto extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TPG_TIPO_GASTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TPG_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el DocumentoRendicion asociado a TipoGasto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_rendicion()
    {
        return $this->belongsTo('App\DocumentoRendicion', 'DOC_TIPO_GASTO');
    }
}
