<?php

namespace mikehins\CountriesZones;

use Illuminate\Support\ServiceProvider;

class CountriesZonesServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->commands([
			'mikehins\CountriesZones\Commands\CountriesZonesCommand',
		]);
	}
	
	public function boot()
	{
		$this->loadMigrationsFrom(__DIR__.'/database/migrations/');
	}
}