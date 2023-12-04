<?php

namespace App\Providers;

use App\Models\Product;
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
        $gateAndPolicy
        // Gate::define('product-edit', function ($user) {
        //     return $user->checkPermissionAccess('product_edit');
        // });
        // Gate::define('product-edit', function ($user, $id) {
        //     $product = Product::find($id);
        //     if ($user->checkPermissionAccess('product_edit') && $user->id === $product->user_id) {
        //         return true;
        //     }
        //     return false;
        // });
        // Gate::define('product-list', function ($user) {
        //     return $user->checkPermissionAccess('product_list');
        // });
    }

    public function defineGateCategory()
    {
    }
}
