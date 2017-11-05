<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $table = 'bancos';
  protected $fillable = ['banco'];

  public $timestamps = false;

}
