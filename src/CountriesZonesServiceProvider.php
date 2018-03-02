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
		$this->publishes([
			__DIR__.'/database/migrations/' => database_path('migrations')
		], 'migrations');
		
		/*
		php artisan migrate
		php artisan migrate db:seed --class=mikehins\CountriesZones\Seeds\DatabaseSeeder
		*/
		//\Artisan::call('db:seed', ['--class' => 'mikehins\CountriesZones\Seeds\DatabaseSeeder']);
	}
}