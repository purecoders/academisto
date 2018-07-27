<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'name'
  ];

  public function ads(){
    return $this->hasMany('App\Ad');
  }

  public function cities(){
    return $this->hasMany('App\City');
  }
}
