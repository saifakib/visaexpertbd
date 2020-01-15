<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyVisa extends Model
{
    protected $primaryKey = 'apply_id';


    public function visa() {
        return $this->belongsTo('App\Visa', 'apply_id','visa_id');
    }
}
