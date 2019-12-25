<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\User', 'user_id','user_id');
    }

    public function candidateDetails() {
        return $this->belongsTo('App\CandidateDetails', 'user_id','user_id');
    }
}
