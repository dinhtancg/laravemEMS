<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    const PAGINATE_LIMIT = 5;
    protected $fillable = [ 'name', 'description'];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'roles_permissions');
    }
    public function users(){
        return $this->belongsToMany('App\User', 'users_permissions');

    }

}
