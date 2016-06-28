<?php

namespace SPSDecidirWrapper;

use \Illuminate\Support\ServiceProvider;

class SPSDecidirServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->publishConfig();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('SPS', function () {
            return new SPSClient(array(
                'wsdl' => config('SPS.config.wsdl'),
                'dev_wsdl' => config('SPS.config.dev_wsdl'),
                'endpoint' => config('SPS.config.endpoint'),
                'dev_endpoint' => config('SPS.config.dev_endpoint'),
                'dev' => config('SPS.config.dev'),
                'merchant_id' => config('SPS.config.merchant_id'),
                'success_redirect_url' => config('SPS.config.success_redirect_url'),
                'error_redirect_url' => config('SPS.config.error_redirect_url'),
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
            __DIR__ . '/config/config.php' => config_path('SPS.config.php'),
        ]);
    }

    /**
     * Merge media config with users.
     */
    private function mergeConfig() {
        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'SPS.config'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('SPS');
    }

}
