<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateDetails extends Model
{

    protected $primaryKey = 'candidate_id';


    public function user() {
        return $this->belongsTo('App\User', 'user_id','user_id');
    }

    public function candidate() {
        return $this->belongsTo('App\Candidate', 'user_id','user_id');
    }
}
