<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoRendicion extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "DOC_DOCUMENTO_RENDICION";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "DOC_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean

     */
    public $timestamps = false;
    protected $fillable = [
      'DOC_RUT',
      'DOC_PROVEEDOR',
      'DOC_FECHA',
      'DOC_N_DOC',
      'DOC_MONTO',
      'DOC_EMP_ID',
      'DOC_SOLICITUD_ID',
      'DOC_TIPO_DOC',
      'DOC_TIPO_GASTO',
    ];
    /**
     * Obtiene la Empresa asociada a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'DOC_EMP_ID');
    }

    /**
     * Obtiene la SolicitudFondo asociada a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solicitud_fondo()
    {
        return $this->hasOne('App\SolicitudFondo', 'SF_SOLICITUD_ID', 'DOC_SOLICITUD_ID');
    }

    /**
     * Obtiene el TipoDocumento asociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_documento()
    {
        return $this->hasOne('App\TipoDocumento', 'TDC_ID', 'DOC_TIPO_DOC');
    }

    /**
     * Obtiene el TipoGastoasociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_gasto()
    {
        return $this->hasOne('App\TipoGasto', 'TPG_ID', 'DOC_TIPO_GASTO');
    }
}
