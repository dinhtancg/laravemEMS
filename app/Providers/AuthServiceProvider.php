<?php

namespace App\Providers;

use App\Article;
use Illuminate\Http\Request;
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
        $this->registerCategoryPolicies();
    }
    public function registerArticlePolicies()
    {
        Gate::define('create-article', function ($user) {
            return $user->hasAccess(['create-article']);
        });
        Gate::define('update-article', function ($user, Article $article) {
            return $user->hasAccess(['update-article']) or $user->id == $article->user_id;
        });
        Gate::define('confirm-article', function ($user) {
            return $user->hasAccess(['confirm-article']);
        });
        Gate::define('publish-article', function ($user) {
            return $user->hasAccess(['publish-article']);
        });
        Gate::define('create-category', function ($user) {
            return $user->hasAccess(['create-category']);
        });
        Gate::define('update-category', function ($user) {
            return $user->hasAccess(['update-category']);
        });
        Gate::define('delete-category', function ($user) {
            return $user->hasAccess(['delete-category']);
        });
    }

    public function registerCategoryPolicies()
    {
        Gate::define('view-category', function ($user) {
            return $user->hasAccess(['create-category']);
        });
        Gate::define('create-category', function ($user) {
            return $user->hasAccess(['create-category']);
        });
        Gate::define('update-category', function ($user) {
            return $user->hasAccess(['update-category']);
        });
        Gate::define('delete-category', function ($user) {
            return $user->hasAccess(['delete-category']);
        });
    }
}
