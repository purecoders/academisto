<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'url', 'imageable_id', 'imageable_type'
  ];

//  public function imageable(){
//    return $this->morphTo();
//  }
}
