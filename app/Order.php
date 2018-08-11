<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function session()
	{
		$order = session('order', null);

		if (is_null($order)) {
			return [
				'result' => false,
				'message' => 'Session is Empty'
			];
		}

		return  [
			'result' => true,
			'data' => static::find($order),
		];
	}

	public function setUidAttribute($value)
	{
		$timeToString = (string)time();
		$this->attributes['uid'] = str_shuffle(uniqid().$this->attributes['id'].$timeToString);
	}
}
