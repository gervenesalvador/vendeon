<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'summary', 'description', 'price', 'compared_at_price', 'is_track_stock', 'stock', 'sku', 'barcode', 'sef_url'];

    public function photos()
    {
    	return $this->hasMany('App\ProductPhoto');
    }

    public function photo()
    {
        return $this->hasOne('App\ProductPhoto');
    }

    public function reviews()
    {
    	return $this->hasMany('App\ProductReview');
    }

    public function specs() 
    {
    	return $this->hasMany('App\ProductSpec');
    }

    public function variants()
    {
    	return $this->hasMany('App\ProductVariant');
    }

    public function tags()
    {
    	return $this->hasMany('App\ProductTag');
    }

    public function collection()
    {
        return $this->hasOne('App\Collection');
    }

    public function getInventoryAttribute()
    {
        $variants = $this->variants;
        if (empty($variants) && $this->is_track_stock == 0) {
            return "N/A";
        }

        if (!empty($variants)) {
            $total_stock = $variants->where('is_track_stock', 1)->sum('stock');
            $total_variants = $variants->count();

            return "{$total_stock} in stock for {$total_variants} variants";
        }

        return "{$this->stock} in stock";
    }

    public function setSefUrlAttribute($value)
    {
        $this->attributes['sef_url'] = $this->slug($value);
    }

    private function slug($string)
    {
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }
}
