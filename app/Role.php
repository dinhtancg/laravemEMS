<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const PAGINATE_LIMIT = 5;
    protected $fillable = [ 'name', 'slug', 'permission'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'role_permissions');
    }
    public function hasAccess(array $permissions) : bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permission) : bool
    {
        return $this->permissions[$permission] ?? false;
    }
}
