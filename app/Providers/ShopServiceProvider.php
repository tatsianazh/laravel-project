<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->side_menu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function side_menu(){
        View::composer(['partials.sidemenu', 'layouts.app' ], function ($view){
            $cart_count = 11;
            $view->with('categories', Category::all())
            ->with('cart_count', $cart_count);
        });
    }
}
