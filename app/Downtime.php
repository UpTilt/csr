<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downtime extends Model
{
    protected $table = 'downtime';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'reason_id', 'start_time', 'end_time', 'duration', 'notes'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function reason() {
        return $this->belongsTo('App\Reason');
    }
}
