<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\Seo;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->shareContact();
		$this->shareSeo();

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Share contact website to all template
	 *
	 * @return void
	 */
	public function shareContact() {
		\view()->share( 'phone1', Setting::getPhone1() );
		\view()->share( 'phone2', Setting::getPhone2() );
		\view()->share( 'email', Setting::getEmail() );
	}

	/**
	 * Share seo info to all template by slug
	 *
	 * @return void
	 */
	public function shareSeo() {
		$slug = \Request::path();

		$seo = Seo::slug( $slug );

		\view()->share(
			[
				'seo_title'       => $seo->title,
				'seo_description' => $seo->description,
				'seo_keywords'    => $seo->key_words,
			]
		);

	}
}
