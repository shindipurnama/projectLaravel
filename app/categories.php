<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['CATEGORY_ID','CATEGORY_NAME','CATEGORY_STATUS'];
    public $timestamps = false;
}
