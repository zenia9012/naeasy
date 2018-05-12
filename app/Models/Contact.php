<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{
	public static function create( $request ) {

		$contact = new Contact();

		foreach ($request as $key => $value){
			if ($key == '_token'){
				continue;
			}

			$contact->$key = $value;
		}

		$contact->created_at = Carbon::now();
		$contact->updated_at = Carbon::now();
		$contact->save();

	}
}
