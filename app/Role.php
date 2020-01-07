<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $primaryKey = 'role_id';

    public function user() {
        return $this->belongsToMany('App\User','role_id','role_id');
    }
}
