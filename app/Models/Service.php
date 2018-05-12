<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
	use CrudTrait;

	protected $fillable = [
		'title',
		'ua',
		'length',
		'key',
		'all_text_ua',
		'last_modified',
	];

	/**
	 * get services text by key
	 *
	 * @param string $key
	 *
	 * @return Service
	 */
	public static function getServiceBykey( string $key ): Service {
		return Service::where( 'key', $key )->first();
	}

	public static function getAllServices() {
		$service['smm']       = Service::getServiceBykey( 'smm' );
		$service['marketing'] = Service::getServiceBykey( 'marketing' );
		$service['develop']   = Service::getServiceBykey( 'develop' );
		$service['email']     = Service::getServiceBykey( 'email' );
		$service['bisnes']    = Service::getServiceBykey( 'bisnes' );

		return $service;
	}
}
