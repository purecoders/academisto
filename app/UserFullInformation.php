<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserFullInformation extends Model
{

  protected $fillable = [
    'user_id', 'bank_account_id', 'bank_card_id','bank_account_owner_name'
  ];
    public function user(){
      return $this->belongsTo('App\User');
    }
}
