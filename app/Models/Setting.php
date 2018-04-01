<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	use CrudTrait;

	protected $fillable = [
		'title', 'key', 'value'
	];

	public static function getPhone1(  ) {
		$result = Setting::where('key', 'phone_1')->first();

		return $result->value;
    }

	public static function getPhone2(  ) {
		$result = Setting::where('key', 'phone_2')->first();

		return $result->value;
	}

	public static function getEmail(  ) {
		$result = Setting::where('key', 'email')->first();

		return $result->value;
	}
}
