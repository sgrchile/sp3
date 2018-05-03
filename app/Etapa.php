<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "ETAPA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_ETAPA";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'DESC_ETAPA'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    public function proceso() {
        return $this->belongsTo('Proceso', 'PRO_ID');
    }
}
