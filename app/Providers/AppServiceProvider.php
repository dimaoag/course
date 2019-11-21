<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
//            $event->menu->add('Курсы');
//            $event->menu->add([
//                'text' => 'Категории',
//                'icon' => 'fas fa-fw fa-server',
//                'url'  => route('admin.categories.index'),
//                'active' => ['/admin/categories', '/admin/categories/*'],
//            ]);
//
//            $event->menu->add([
//                'text' => 'Города',
//                'url'  => 'admin/regions',
//                'icon' => 'fas fa-map-marker-alt',
//                'active' => ['/admin/regions', '/admin/regions/*'],
//            ]);
//
//        });
    }
}
