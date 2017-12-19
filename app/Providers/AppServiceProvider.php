<?php

namespace App\Providers;

use App\Menu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $menu = new Menu();
        $menus = $menu->getMenu();
//        var_dump($menus);
//        exit;
        view()->share('menus',$menus);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
