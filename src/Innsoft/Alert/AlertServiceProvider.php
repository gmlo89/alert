<?php namespace Innsoft\Alert;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('innsoft/alert');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['alert'] = $this->app->share(function($app)
        {
            $alertBuilder = new Alert($app['view'], $app['session.store']);
            return $alertBuilder;
        });

        $this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('Alert', 'Innsoft\Alert\Facades\Alert');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
