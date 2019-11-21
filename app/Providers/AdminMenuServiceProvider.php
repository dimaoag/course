<?php

namespace App\Providers;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AdminMenuServiceProvider extends ServiceProvider
{

    public function register()
    {
    }


    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Курсы');
            $event->menu->add([
                'text' => 'Категории',
                'icon' => 'fas fa-fw fa-server',
                'url'  => route('admin.categories.index'),
                'active' => ['/admin/categories', '/admin/categories/*'],
            ]);

            $event->menu->add([
                'text' => 'Города',
                'url'  => 'admin/regions',
                'icon' => 'fas fa-map-marker-alt',
                'active' => ['/admin/regions', '/admin/regions/*'],
            ]);

        });
    }
}
