<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anho extends Model
{
  protected $table = 'RH_ANHO';
  protected $primaryKey = "ANH_ID";
  public $timestamps = false;
  protected $fillable = [
    'ANH_ID', 'ANH_DESC'
  ];
}
