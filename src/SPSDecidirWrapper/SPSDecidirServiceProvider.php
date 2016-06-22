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
        // Nothing here
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
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // Nothing here
    }

}