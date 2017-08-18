<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CAR_CARGO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CAR_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Personal asociado al Cargo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personal()
    {
        return $this->belongsTo('App\Personal', 'PER_CAR_ID');
    }
}
