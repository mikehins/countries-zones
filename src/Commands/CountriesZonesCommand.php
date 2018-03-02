<?php

namespace mikehins\CountriesZones\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesZonesCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'cz:seed';
	
	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Add 2 tables countries and zones to your database';

	public function __construct()
	{
		parent::__construct();
	}
	
	public function handle()
	{
		\Artisan::call('db:seed', ['--class' => 'mikehins\CountriesZones\database\seeds\DatabaseSeeder']);
		\Artisan::call('make:model Countries');
		\Artisan::call('make:model Zones');
		$this->info('The tables have been seeded');
	}
}
