<?php namespace Xtrasmal\TacticianProvider;

use Illuminate\Support\ServiceProvider;

class TacticianServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../../config/modules.php' => config_path('modules.php'),
		]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../../config/tactician.php', 'tactician'
		);

		$this->registerServices();

	}

	/**
	 * Register the package services.
	 *
	 * @return void
	 */
	protected function registerServices()
	{
		$this->app->bindShared('tactician', function ($app) {
			return new Tactician($app['config'], $app['files']);
		});

		$this->app->booting(function ($app) {
			$app['tactician']->register();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
	public function provides()
	{
		return ['tactician'];
	}

}
