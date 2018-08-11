<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getCompleteAddressAttribute()
    {
    	return $this->address. ', '. $this->barangay. ', '. $this->city. ' '. $this->country;  
    }

    public static function session()
    {
    	$checkout = session('checkout', null);

    	if (is_null($checkout)) {
    		return [
				'result' => false,
				'message' => 'Session is Empty Customer',
			];
        }

        return [
        	'result' => true,
        	'data' => static::find($checkout)
        ];
    }
}
