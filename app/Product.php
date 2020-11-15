<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $fillable = [
        'product_name', 'product_serial', 'product_garage','product_route	','product_image','buying_date','buying_price','selling_price','offer_price','net_wight','detail','status','total_stock','stock_in',
    ];
}
