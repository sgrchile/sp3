<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
  protected $table = 'RH_MES';
  protected $primaryKey = "MES_ID";
  public $timestamps = false;
  protected $fillable = [
    'MES_ID', 'MES_DESC'
  ];
}
