<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;
use App\User;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        /*
        \App\Models\Post::class => \App\Policies\PostPolicy::class,
        */
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        /*
        Gate::define('update-post', function(User $user, Post $post){
            return $user->id == $post->user_id;
        });
        */ 
       $permissions = Permission::with('roles')->get();
       dd($permissions);
    }
}
