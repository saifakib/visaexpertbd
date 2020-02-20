<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'title', 'slug', 'image','body',
    ];
}
