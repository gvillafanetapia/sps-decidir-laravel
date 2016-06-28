<?php

namespace SPSDecidirWrapper;

use \Illuminate\Support\ServiceProvider;

class SPSDecidirServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('SPS', function () {
            return new SPSClient(array(
				'wsdl' => config('SPS.config.wsdl'),
				'dev_wsdl' => config('SPS.config.dev_wsdl'),
				'dev' => config('SPS.config.dev'),
				'auth_token' => config('SPS.config.auth_token')
			));
        });
		$this->mergeConfig();
    }

	/**
	 * Publish the package configuration
	 */
	protected function publishConfig() {
		$this->publishes([
			__DIR__ . '/config/config.php' => config_path('minify.config.php'),
		]);
	}

	/**
	 * Merge media config with users.
	 */
	private function mergeConfig() {
		$this->mergeConfigFrom(
			__DIR__ . '/config/config.php', 'minify.config'
		);
	}

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('SPS');
    }

}