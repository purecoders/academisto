<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'user_id', 'paymentable_id', 'paymentable_type','amount',
    'user_to_site','bank_receipt'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

//  public function paymentable(){
//    return $this->morphTo();
//  }
}
