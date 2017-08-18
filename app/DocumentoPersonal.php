<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoPersonal extends Model
{
  protected $table = 'RH_DPER_DOCUMENTOS_PERSONAL';
  protected $primaryKey = "DPER_ID";
  public $timestamps = false;
  protected $fillable = [
    'DPER_ID', 'DPER_DESC', 'DPER_URL', 'DPER_PERSONAL_PER_RUT'
  ];
}
