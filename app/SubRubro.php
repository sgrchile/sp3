<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubRubro extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = 'sub_rub_rubro';

    protected $fillable = ['SUB_RUB_DESC'];

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "SUB_RUB_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    public function rubro()
    {
        return $this->hasMany('App\Rubro');
    }

    public static function subrubros($id){
        return SubRubro::pluck('SUB_RUB_DESC','SUB_RUB_COD')->where('RUB_COD','=',$id);
    }

    /**
     * Obtiene el Proveedor asociado a SubRubro
     *proveed
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_SUBRUBRO');
    }

    /**
     * Obtiene el Cliente asociado a SubRubro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'CLI_SUB_RUBRO');
    }

}
