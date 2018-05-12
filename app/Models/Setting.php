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

	/**
	 * Share contact website to all template
	 *
	 * @return void
	 */
	public static function shareContact() {
		\view()->share( 'phone1', self::getPhone1() );
		\view()->share( 'phone2', self::getPhone2() );
		\view()->share( 'email', self::getEmail() );
	}
}
