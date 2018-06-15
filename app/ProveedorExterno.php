<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorExterno extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PROVEEDOR_EXTERNO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_PRO_EXT";

    protected $fillable = [
        'PRO_EXT_NOM',
        'PRO_EXT_APE_PAT',
        'PRO_EXT_APE_MAT',
        'PRO_EXT_RUT',
        'PRO_EXT_DIRECCION',
        'PRO_EXT_TELEFONO',
        'PRO_EXT_TEL_EMERG',
        'PRO_EXT_GENERO',
        'PRO_EXT_PAIS',
        'PRO_EXT_CIUDAD',
        'PRO_EXT_PROVINCIA',
        'PRO_EXT_COMUNA',
        'PRO_EXT_AREA_DESEMP',
        'PRO_EXT_FORM_PAGO',
        'PRO_EXT_REDES',
        'PRO_EXT_RUBRO',
        'PRO_EXT_SUB_RUBRO',
        'PRO_EXT_NRO_CTA',
        'PRO_EXT_TP_CTA',
        'PRO_EXT_BCO',
        'PRO_EXT_WEB',
        'PRO_EXT_EMP',
        'PRO_EXT_FEC_NAC',
        'PRO_EXT_NV_ESTUDIO',
        'PRO_EXT_SIT_LAB',
        'PRO_EXT_INGLES',
        'PRO_EXT_MOV',
        'PRO_EXT_DISCAPACIDAD',
        'PRO_EXT_CERTF_ANT',
        'PRO_EXT_FOTO',
        'PRO_EXT_COMENTARIO',
        'PRO_EXT_LICENCIA'
    ];
}
