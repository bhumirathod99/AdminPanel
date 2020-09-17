<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $hidden = [ 'id' ];
    protected $fillable = [ 'skill_master', 'skill', 'image', 'discription'];
}
