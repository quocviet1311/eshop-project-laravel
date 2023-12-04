<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void

    {
        $this->defineGateCategory();
        Gate::define('product-edit', function ($user) {
            return $user->checkPermissionAccess('product_edit');
        });
        Gate::define('product-edit', function ($user) {
            if ($user->checkPermissionAccess('product_edit') && $user)
                return $user->checkPermissionAccess('product_edit');
        });
        Gate::define('product-list', function ($user) {
            return $user->checkPermissionAccess('product_list');
        });
    }

    public function defineGateCategory()
    {
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');
        Gate::define('category-add', 'App\Policies\CategoryPolicy@create');
        Gate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        Gate::define('category-delete', 'App\Policies\CategoryPolicy@delete');
    }
}
