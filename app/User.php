<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $table = 'user';
    protected $fillable = ['USER_ID','FIRST_NAME','LAST_NAME','PHONE','EMAIL','PASSWORD','JOB_STATUS'];
    public $timestamps = false;
}
