<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'location',
        'contacts',
        'quantity',
        'picture',
        'extra_info',
        'date_from',
        'date_to',
        'category_id',
    ];
}
