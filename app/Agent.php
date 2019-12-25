<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{

    public function user() {
        return $this->belongsTo('App\User', 'user_id','user_id');
    }

    public function agentDetails() {
        return $this->belongsTo('App\AgentDetails', 'user_id','user_id');
    }

    public function visa() {
        return $this->belongsMany('App\Visa', 'agent_id','agent_id');
    }
    
}
