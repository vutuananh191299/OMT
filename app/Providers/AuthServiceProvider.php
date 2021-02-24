<?php

namespace App\Providers;

use App\Model\users;
use App\Model\Role;
use App\Model\Permission;
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
        Gate::define('admin', function ($user){
            if ($user->status == 3)
                return true;
        });
        Gate::define('xem', function ($user){
           $user_info = users::where('id', $user->id)
               ->with('roles.permissions')
               ->first();
            if (count($user_info->roles) > 0) {
                foreach ($user_info->roles as $role) {

                    $permission_ids =  $role->permissions->pluck('id')->toArray();
                    if (in_array('4' , $permission_ids ) or $user->status == 3)
                        return true;
                }
            }
        });

        Gate::define('them', function ($user){
            $user_info = users::where('id', $user->id)
                ->with('roles.permissions')
                ->first();
            if (count($user_info->roles) > 0) {
                foreach ($user_info->roles as $role) {

                    $permission_ids =  $role->permissions->pluck('id')->toArray();
                    if (in_array('2' , $permission_ids ) or $user->status == 3)
                        return true;
                }
            }

        });

        Gate::define('sua', function ($user){
            $user_info = users::where('id', $user->id)
                ->with('roles.permissions')
                ->first();
            $permission_ids = [];

            if (count($user_info->roles) > 0) {
                foreach ($user_info->roles as $role) {

                    $permission_ids =  $role->permissions->pluck('id')->toArray();
                    if (in_array('3' , $permission_ids ) or $user->status == 3)
                        return true;

                }
            }

        });

        Gate::define('xoa', function ($user){
            $user_info = users::where('id', $user->id)
                ->with('roles.permissions')
                ->first();

            if (count($user_info->roles) > 0) {
                foreach ($user_info->roles as $role) {

                    $permission_ids =  $role->permissions->pluck('id')->toArray();
                    if (in_array('5' , $permission_ids ) or $user->status == 3)
                        return true;

                }
            }

        });

        Gate::define('them', function ($user){
            $user_info = users::where('id', $user->id)
                ->with('roles.permissions')
                ->first();

            if (count($user_info->roles) > 0) {
                foreach ($user_info->roles as $role) {

                    $permission_ids =  $role->permissions->pluck('id')->toArray();
                    if (in_array('2' , $permission_ids ) or $user->status == 3)
                        return true;

                }
            }

        });
    }
}
