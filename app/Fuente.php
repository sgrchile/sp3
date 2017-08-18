<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "FTE_FUENTE";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "FTE_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el RegistroMovimiento asociado a Fuente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_FTE_ID');
    }
}
