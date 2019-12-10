<?php

namespace App\Providers;

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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // // the gate checks if the user is an admin or a superadmin
        // Gate::define('accessAdminpanel', function ($user) {
        //     return $user->role(['superadmin', 'admin']);
        // });

        // // the gate checks if the user is a member
        // Gate::define('accessProfile', function ($user) {
        //     return $user->role('member');
        // });
    }
}
