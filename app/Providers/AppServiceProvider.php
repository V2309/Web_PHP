<?php

namespace App\Providers;

use App;
use App\Models\Product_Category;
use App\Models\Product_Group  ;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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

     // hien thi danh muc san pham len layout
    public function boot()
    {
        $categories = Product_Category::all();
        $groups = Product_Group::with('productCategory')->get();

        view()->share([
            'categories' => $categories,
            'groups' => $groups,
        ]);
        //
    }
}
