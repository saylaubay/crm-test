<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::if('isShow', function (...$expression){
            $permissions = auth()->user()->role->permissions;
            $bool = false;

            for($i=0; $i<count($expression[0]); $i++){
                foreach ($permissions as $permission){
                    if ($permission->name == $expression[0][$i]){
                        $bool = true;
                        break;
                    }
                }
                if ($bool){
                    break;
                }
            }
            return $bool;
        });


        Blade::if('check', function ($expression){
            $role = auth()->user()->role;

            $bool = false;

            if (empty($expression)){
                $bool = true;
            }
            if (!empty($expression)){
                foreach ($role->permissions as $permission){
                    if ($expression == $permission->name){
                        $bool = true;
                    }
                }
            }
            return $bool;
        });

        Paginator::useBootstrap();
    }
}
