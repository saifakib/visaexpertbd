<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agent() {
        return $this->belongsTo('App\Agent','user_id','user_id');
    }
    public function role() {
        return $this->belongsTo('App\Role','role_id','role_id');
    }
    public function agentDetails() {
        return $this->belongsTo('App\AgentDetails','user_id','user_id');
    }

    public function candidate() {
        return $this->belongsTo('App\Candidate','user_id','user_id');
    }
    public function candidateDetails() {
        return $this->belongsTo('App\CandidateDetails','user_id','user_id');
    }
}
