<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'user_id', 'title', 'description','price', 'state_id', 'city_id',
    'univ_id', 'photo_id'
  ];


    public function user(){
      return $this->belongsTo('App\User');
    }

    public function state(){
       return $this->belongsTo('App\State');
    }

    public function city(){
      return $this->belongsTo('App\City');
    }

    public function univ(){
      return $this->belongsTo('App\Univ');
    }

    public function payment(){
      return $this->morphOne('App\Payment','paymentable');
    }

    public function photo (){
      return $this->morphOne('App\Photo','imageable');
    }

    public function reports (){
      return $this->morphMany('App\Report','reportable');
    }
}
