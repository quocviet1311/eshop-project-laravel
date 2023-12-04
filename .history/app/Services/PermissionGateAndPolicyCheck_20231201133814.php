<?php

namespace App\Service;

use Illuminate\Support\Facades\Gate;

class PermissionGateAndPolicyCheck
{
    public function setGateAndPolicyAccess()
    {
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');
        Gate::define('category-add', 'App\Policies\CategoryPolicy@create');
        Gate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        Gate::define('category-delete', 'App\Policies\CategoryPolicy@delete');
    }
}
