<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $table = 'goals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'daily_goal', 'dept_goal'
    ];
}
