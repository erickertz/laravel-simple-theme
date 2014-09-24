<?php namespace Tr1ck\Theme;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ThemeServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('theme', function()
        {
            return new Theme();
        });
	}
	
	public function boot()
	{
		$this->package('tr1ck/theme');
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
