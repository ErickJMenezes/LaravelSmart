<?php

namespace ErickJMenezes\LaravelSmart\Tests;

use ErickJMenezes\LaravelSmart\Providers\OracleSmartServiceProvider;
use Orchestra\Testbench\TestCase;

class OracleSmartConnectionIsAvailableTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            OracleSmartServiceProvider::class,
        ];
    }

    public function testItMustHaveTheSmartConnection(): void
    {
        self::assertArrayHasKey('smart', $this->app['config']->get('database.connections'));
    }
}
