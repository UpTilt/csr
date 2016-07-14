<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    protected $table = 'hours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'hours', 'daily_goal'
    ];

    public function user() {
        return $this->belongsTo('App\User')->first();
    }

    public function updateHours($inputHours) {
        $this->update(['hours' => $inputHours,]) ;
        dd($this->hours);
    }

    


}
