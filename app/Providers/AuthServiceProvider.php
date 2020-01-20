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
        //view
        Gate::define('view-users', function ($user) {
            return $user->hasAnyRole(['manager','admin']);
        });

        Gate::define('manage-users', function ($user) {
            return $user->hasAnyRole(['admin']);
        });
        //edit
        Gate::define('edit-business-developper', function ($user) {
            return $user->hasAnyRole(['admin']);
        });

        Gate::define('edit-users', function ($user) {
            return $user->isAdmin();
        });
        //delete
        Gate::define('delete-users', function ($user) {
            return $user->isAdmin();
        });
        //create
        Gate::define('create-action-parameter', function ($user) {
            return $user->isAdmin();
        });

        Gate::define('create-contact-parameter', function ($user) {
            return $user->isAdmin();
        });

        Gate::define('create-todo-parameter', function ($user) {
            return $user->isAdmin();
        });

        
    }
}
