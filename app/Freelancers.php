<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancers extends Model
{
    protected $fillable = [
        'user_id', 'level'
    ];
}
