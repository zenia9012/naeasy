<?php

namespace App\Models;

use Carbon\Carbon;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Callback extends Model {
	use CrudTrait;

	protected $fillable = [
		'name',
		'phone',
		'comment',
	];

	/**
	 * method record new callback to database
	 *
	 * @param string $name
	 * @param string $phone
	 *
	 * @return void
	 */
	public static function create( string $name, string $phone ) {
		$callback = new Callback();

		$callback->name       = $name;
		$callback->phone      = $phone;
		$callback->created_at = Carbon::now();
		$callback->updated_at = Carbon::now();

		$callback->save();
	}
}
