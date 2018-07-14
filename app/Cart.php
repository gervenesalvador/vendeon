<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['product_id', 'quantity', 'variants_1', 'variants_2', 'variants_3', 'price'];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}
}
