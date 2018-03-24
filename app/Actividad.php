<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = 'actividad';

    protected $fillable = ['ACT_DESC','SUB_RUB_COD'];

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ACT_COD_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    public static function actividades($id){
        return Actividad::where('SUB_RUB_COD','=', $id)
            ->get();
    }

    /**
     * Obtiene el Cliente asociado a Actividad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'CLI_ACTIVIDAD');
    }
}
