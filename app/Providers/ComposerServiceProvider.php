<?php

namespace App\Providers;

use App\Http\ViewComposers\LayoutComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('layouts.app', LayoutComposer::class);
    }
}
