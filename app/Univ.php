<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Univ extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'city_id', 'name'
  ];

  public function ads(){
    return $this->hasMany('App\Ad');
  }
}
