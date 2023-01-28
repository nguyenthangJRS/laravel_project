<?php

namespace App\Providers;

use App\Component\RecusiveAbstract;
use App\Component\RecusiveCategory;
use App\Repository\Interface\CategoryInterface;
use App\Repository\Interface\LoginInterface;
use App\Repository\Interface\MenuInterface;
use App\Repository\LoginRepository;
use App\Repository\MenuRepository;
use App\Service\Interface\LoginServiceInterface;
use App\Service\LoginService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Service\GenaralService;
use App\Repository\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
        $this->app->bind(MenuInterface::class,MenuRepository::class);
        $this->app->singleton(RecusiveAbstract::class,RecusiveCategory::class);
        $this->app->bind(LoginInterface::class,LoginRepository::class);
        $this->app->bind(LoginServiceInterface::class,LoginService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        paginator::useBootstrap();
    }
}
