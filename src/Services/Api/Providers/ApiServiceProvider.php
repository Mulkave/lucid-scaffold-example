<?php
namespace App\Services\Api\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
	/**
	 * Register the Api module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Services\Api\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Api module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('api', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('api', realpath(__DIR__.'/../Resources/Views'));
	}
}
