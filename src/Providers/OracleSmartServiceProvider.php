<?php

namespace ErickJMenezes\LaravelSmart\Providers;

use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class OracleSmartServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (file_exists(config_path('oracle-smart.php'))) {
            $this->mergeConfigFrom(config_path('oracle-smart.php'), 'database.connections');
        } else {
            $this->mergeConfigFrom(__DIR__.'/../../config/oracle-smart.php', 'database.connections');
        }

        Connection::resolverFor('smart', function ($connection, $database, $prefix, $config) {
            $oracleResolver = Connection::getResolver('oracle');
            return $oracleResolver($connection, $database, $prefix, $config);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/oracle-smart.php' => config_path('oracle-smart.php'),
        ], 'oracle-smart');
    }
}
