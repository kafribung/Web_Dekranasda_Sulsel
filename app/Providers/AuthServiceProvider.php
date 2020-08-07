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
