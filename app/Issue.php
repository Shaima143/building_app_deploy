<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['name',
    'email',
    'phone',
    'msg',
    'building_number',
    'appartment_number',
    'user_id'];

    //protected $guarded = [];

    public function user(){

        return $this ->belongs(User::class);
    }
}
