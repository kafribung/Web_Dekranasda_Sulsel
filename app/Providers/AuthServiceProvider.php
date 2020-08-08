<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Member' => 'App\Policies\MemberPolicy',
        'App\Models\MemberImg' => 'App\Policies\MemberImgPolicy',
        'App\Models\ProductCategory' => 'App\Policies\ProductCategoryPolicy',
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\ProductImg' => 'App\Policies\ProductImgPolicy',
        'App\Models\Activity' => 'App\Policies\ActivityPolicy',
        'App\Models\Blog' => 'App\Policies\BlogPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function (User $user) {
            return $user->king() ? 'true' : null;
        });
    }
}
