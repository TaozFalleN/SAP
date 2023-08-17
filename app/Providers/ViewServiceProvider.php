<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) 
        {     
            if (Auth::check() && $view->getName() != "auth.login") {
                //...with this variable
                $view->with('menus', Menu::menuRol());    
                $view->with('perfil', Usuario::obtenerPerfil());  
            }
        });
    }
}
