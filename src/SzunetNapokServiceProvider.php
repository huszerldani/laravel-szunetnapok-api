<?php

namespace Pinasen\SzunetNapok;

use Illuminate\Support\ServiceProvider;

class SzunetNapokServiceProvider extends ServiceProvider {
	public function boot() {

	}

	public function register() {
		$this->app->singleton(SzunetNapok::class, function() {
			return new SzunetNapok();
		});
	}
}
