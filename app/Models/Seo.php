<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use CrudTrait;

    protected $fillable = [
    	'name_page', 'slug_page', 'title', 'key_words', 'description'
    ];

	/**
	 * get Seo object by page slug, if this slug page don`t exists method return slug by main page, if don`t exits seo
	 * info in main page get a super default seo info
	 *
	 * @param string $slug
	 * @return Seo
	 */
	public static function slug( string $slug ):Seo {
		$seo = Seo::where('slug_page', $slug)->first();

		if ($seo == null){
			$seo = Seo::where('slug_page', '/')->first();
			if ($seo == null){
				$seo = self::superDefaultSeo();
			}
		}

		return $seo;
	}

	/**
	 * method return superDefault seo info if dont exist any seo info in seos table
	 *
	 * @return Seo
	 */
	public static function superDefaultSeo(  ) {
		$seo = new Seo();

		$seo->title = env('APP_NAME', 'Laravel');
		$seo->key_words = env('APP_NAME', 'Laravel');
		$seo->description = env('APP_NAME', 'Laravel');

		return $seo;
	}
}
