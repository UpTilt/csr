<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table = 'types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight', 'group_id', 'label_id'
    ];

    public function activities() {
        return $this->hasMany('App\Activity');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function label() {
        return $this->belongsTo('App\Label');
    }

    public function findWeight() {
        return $this->weight;
    }

    public function findByGroup($groupId) {
        return $this->where('group_id', $groupId)->get();
    }


}
