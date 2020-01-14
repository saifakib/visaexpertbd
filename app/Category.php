<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    public function category() {
        return $this->belongsMany('App\Visa', 'category_id','category_id');
    }
}
