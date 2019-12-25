<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentDetails extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\User', 'user_id','user_id');
    }

    public function agent() {
        return $this->belongsTo('App\Agent', 'user_id','user_id');
    }

    public function visa() {
        return $this->belongsMany('App\Visa', 'agent_id','agent_id');
    }
}
