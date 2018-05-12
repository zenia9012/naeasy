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
		Setting::shareContact();
		Seo::shareSeo();
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
