<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Composers\ProfileComposer;
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
    public function boot()
    {
        Paginator::useBootstrap();

        Gate::define('admin', function (User $user)
        {
            return $user->is_admin;
        });
        //dd(Auth::user());
        //print_r($cartdata);
        // print_r(Auth::id());
        // print_r('');
        // $cartdata = 0;
        // if(Auth::check()){
        //     $cartdata = Cart::where('user_id', Auth::user()->id)->count();

        //     print_r($cartdata);
        // }
        // else{
        // }

        // View::composer('partials.header', function($view) use($cartdata) {
        //     $view->with('cartdata',$cartdata);
        // });

        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    }
}
