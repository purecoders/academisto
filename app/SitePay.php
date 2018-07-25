<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SitePay extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id',
    'amount',
    'bank_receipt'
  ];


  public function user(){
    return $this->belongsTo('App\User');
  }

}
