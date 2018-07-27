<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{

    use SoftDeletes;

  protected $fillable = [
    'state_id', 'name'
  ];


    public function ads(){
      return $this->hasMany('App\Ad');
    }


}
