<?php
/**
 * This file is part of PHP CS Fixer.
 *
 * (c) vinhson <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace James\Laravel\AliGreen;

use Illuminate\Support\ServiceProvider;

class LaravelAliGreenServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected bool $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/aliyun.php' => config_path('aliyun.php')
            ], 'aliyun-green');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     *
     * @see \Illuminate\Container\Container
     */
    public function register()
    {
        $this->app->singleton('LaravelAliGreen', function ($app) {
            return new AliGreenManager($app);
        });

        $this->app->alias(AliGreenManager::class, 'LaravelAliGreen');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['LaravelAliGreen'];
    }
}
