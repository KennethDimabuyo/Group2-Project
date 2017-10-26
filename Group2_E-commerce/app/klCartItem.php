<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klCartItem extends Model
{
    protected $fillable = [
    	'photo',
    	'name',
    	'quantity',
    	'price'
    ];

    public $primarykey = 'product_id';
}
