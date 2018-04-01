<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

	use CrudTrait;

	protected $fillable = [
		'name', 'email', 'message'
	];
	public static function create( $name, $email, $message ) {
		$feedback = new Feedback();

		$feedback->name       = $name;
		$feedback->email      = $email;
		$feedback->message    = $message;
		$feedback->created_at = Carbon::now();
		$feedback->updated_at = Carbon::now();

		$feedback->save();
	}
}
