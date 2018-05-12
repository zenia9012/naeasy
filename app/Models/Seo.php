<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use CrudTrait;

    protected $fillable = [
    	'name_page', 'slug_page', 'title', 'key_words', 'description',
	    'og_image', 'og_title','og_description',
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
		$seo->og_description = env('APP_NAME', 'Laravel');
		$seo->og_title = env('APP_NAME', 'Laravel');
		$seo->og_image = env('APP_NAME', 'Laravel');

		return $seo;
	}

	/**
	 * Share seo info to all template by slug
	 *
	 * @return void
	 */
	public static function shareSeo() {
		$slug = \Request::path();

		$seo = self::slug( $slug );

		\view()->share(
			[
				'seo_title'       => $seo->title,
				'seo_description' => $seo->description,
				'seo_keywords'    => $seo->key_words,
				'og_title'       => $seo->og_title,
				'og_description' => $seo->og_description,
				'og_image'       => $seo->og_image,
			]
		);
	}
}
