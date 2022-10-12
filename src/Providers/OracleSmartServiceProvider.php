<?php

namespace ErickJMenezes\LaravelSmart\Providers;

use Illuminate\Contracts\Foundation\CachesConfiguration;
use Illuminate\Support\ServiceProvider;

class OracleSmartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFromAs(
            $this->getOracleConfigFile(),
            'database.connections',
            ['oracle' => 'smart'],
        );
    }

    public function boot()
    {
        $this->publishes([
            $this->getOracleConfigFile(false) => config_path('oracle-smart.php'),
        ], 'oracle-smart');
    }

    private function mergeConfigFromAs($path, $key, $renameMap = [])
    {
        if (! ($this->app instanceof CachesConfiguration && $this->app->configurationIsCached())) {
            $config = $this->app->make('config');
            $originalConfig = require $path;
            foreach ($renameMap as $currentKey => $newKey) {
                $currentValue = $originalConfig[$currentKey];
                unset($originalConfig[$currentKey]);
                $originalConfig[$newKey] = $currentValue;
            }
            $config->set($key, array_merge(
                $originalConfig, $config->get($key, [])
            ));
        }
    }

    private function getOracleConfigFile($checkPublish = true)
    {
        $configPath = config_path('oracle-smart.php');
        if ($checkPublish && file_exists($configPath)) {
            return $configPath;
        }
        return glob($this->app->basePath('vendor/yajra/laravel-oci8/src/*/oracle.php'))[0];
    }
}
