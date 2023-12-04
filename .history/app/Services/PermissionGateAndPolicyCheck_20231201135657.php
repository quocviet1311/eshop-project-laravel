<?php

namespace App\Services;

use Illuminate\Support\Facades\Gate;

class PermissionGateAndPolicyCheck
{
    public function setGateAndPolicyAccess()
    {
        $this->defineGateCategory();
    }

    public function defineGateCategory()
    {
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');
        Gate::define('category-add', 'App\Policies\CategoryPolicy@create');
        Gate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        Gate::define('category-delete', 'App\Policies\CategoryPolicy@delete');
    }

    public function defineGateMenu()
    {
        Gate::define('category-list', 'App\Policies\MenuPolicy@view');
        Gate::define('category-add', 'App\Policies\MenuPolicy@create');
        Gate::define('category-edit', 'App\Policies\MenuPolicy@update');
        Gate::define('category-delete', 'App\Policies\MenuPolicy@delete');
    }
}
