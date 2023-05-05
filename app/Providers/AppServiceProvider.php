<?php

namespace App\Providers;

use App\Models\HomeHead;
use App\Traits\LocaleTrait;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    use LocaleTrait;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        /*  $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image')->get();
          View::share('homeHeads', $homeHeads);*/
    }
}
