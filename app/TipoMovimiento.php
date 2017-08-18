<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TMOV_TIPO_MOVIMIENTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TMOV_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la CartolaBancaria asociada al TipoMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cartola_bancaria()
    {
        return $this->belongsTo('App\CartolaBancaria', 'CB_TMOV_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado al TipoMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_TMOV_ID');
    }
}
