<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\TestService;

class TestServiceProvider extends ServiceProvider
{

    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 注册服务提供者
     *
     * @return void
     */
    public function register()
    {
        //使用singleton绑定单例
        $this->app->singleton('testSg',function(){
            return new TestService();
        });

        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind('App\Contracts\TestContract',function(){
            return new TestService();
        });
    }

    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Contracts\TestContract', 'testSg'];
    }
}
