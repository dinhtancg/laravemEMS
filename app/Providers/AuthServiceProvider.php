<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerArticlePolicies();
        //
    }
    public function registerArticlePolicies()
    {
        Gate::define('create-article', function ($user) {
            return $user->hasAccess(['create-article']);
        });
        Gate::define('update-article', function ($user, Post $post) {
            return $user->hasAccess(['update-article']) or $user->id == $post->user_id;
        });
        Gate::define('confirm-article', function ($user) {
            return $user->hasAccess(['confirm-article']);
        });
        Gate::define('publish-article', function ($user) {
            return $user->hasAccess(['publish-article']);
        });
    }
}
