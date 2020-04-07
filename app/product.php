<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['PRODUCT_ID','CATEGORY_ID','PRODUCT_NAME','PRODUCT_PRICE','PRODUCT_STOCK','EXPLANATION'];
    public $timestamps = false;
}
