<?php

namespace App\Models;

use Carbon\Carbon;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class SendCommercial extends Model
{
	use CrudTrait;

	protected $fillable = [
		'name',
		'phone',
		'comment',
	];

	/**
	 * method record new request for send kp to database
	 *
	 * @param string $name
	 * @param string $email
	 *
	 * @return void
	 */
	public static function create( string $name, string $email ) {
		$callback = new SendCommercial();

		$callback->name       = $name;
		$callback->email      = $email;
		$callback->created_at = Carbon::now();
		$callback->updated_at = Carbon::now();

		$callback->save();
	}
}
