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
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');

        Gate::define('category-add', function ($user) {
            return $user->checkPermissionAccess('category_add');
        });
        Gate::define('category-edit', function ($user) {
            return $user->checkPermissionAccess('category_edit');
        });
        Gate::define('menu-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });
    }
}
