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
        Event::class => EventPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        // Gate::define('update-event', 'App\Policies\EventPolicy@update');

        // Gate::define('update-event', function($user, $event) {
        //     return $user->id == $event->user_id;
        // });
        
        // Gate::define('attend-event', function($user, $event) {
        //     return $user->id != $event->user_id;
        // });

        // Gate::before(function ($user) {
        //     return $user->is_admin == true;
        // });

    }
}
