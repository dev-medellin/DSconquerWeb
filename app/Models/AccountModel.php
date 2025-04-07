<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    //
    public $table = 'accounts';
    public $fillable = ['Username','Password','Ip','EntityID','State','Email','TokenChangePass','Creation','Online','inservertest'];
}
