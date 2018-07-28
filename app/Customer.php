<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getCompleteAddressAttribute()
    {
    	return $this->address. ', '. $this->barangay. ', '. $this->city. ' '. $this->country;  
    }
}
