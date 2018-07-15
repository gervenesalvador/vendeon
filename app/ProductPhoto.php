<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable = ['product_id', 'file_name'];

    public $timestamps = false;
}
