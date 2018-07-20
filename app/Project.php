<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'user_id', 'title', 'description','user_price', 'is_immediate',
    'is_started', 'is_finished'
  ];

    public function requests(){
      return $this->hasMany('App\ProjectRequest');
    }

    public function payment(){
      return $this->morphOne('App\Payment','paymentable');
    }


    public function reports(){
      return $this->morphMany('App\Report');
    }

}
