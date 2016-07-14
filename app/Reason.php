<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $table = 'reasons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'exempt'
    ];

    public function downtime() {
        return $this->hasMany('App\Downtime');
    }

}
