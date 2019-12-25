<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    public function agent() {
        return $this->belongsTo('App\Agent', 'agent_id','agent_id');
    }

    public function agentDetails() {
        return $this->belongsTo('App\AgentDetails', 'agent_id','agent_id');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'category_id','category_id');
    }
}
