<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = ['product_id', 'value_1', 'value_2', 'value_3', 'price', 'compared_at_price', 'is_tract_stock', 'stock', 'sku', 'barcode'];

    public $timestamps = false;
    
}
