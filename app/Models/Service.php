<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use CrudTrait;

    protected $fillable = [
    	'title', 'ua','length', 'key'
    ];

	/**
	 * get services text by key
	 *
	 * @param string $key
	 *
	 * @return Service
	 */
	public static function getServiceBykey( string $key ) :Service {
		return Service::where('key', $key)->first();
    }
}
