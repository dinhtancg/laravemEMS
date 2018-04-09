<?php

namespace App\Permissions;

use App\Permission;
use App\Role;

trait HasPermissionsTrait {

    public function roles() {
        return $this->belongsToMany(Role::class,'users_roles');

    }


    public function permissions() {
        return $this->belongsToMany(Permission::class,'users_permissions');

    }
    public function hasRole( ... $roles) {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermissionTo($permission) {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    protected function hasPermission($permission) {
        return (bool) $this->permissions->where('name', $permission->name)->count();
    }

    public function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
}