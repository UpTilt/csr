<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Goals;

class Activity extends Model
{
    protected $table = 'activities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'service_order', 'type_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function fromCurrentUser() {
        return $this->all()->user()->where('user_id', \App\User::find(1));
    }

    public function type() {
        return $this->belongsTo('App\Type');
    }

    public function parseDailyActivitiesByGroup($groupId) {
        dd("Group");
        $activitiesInGroup = [];
        foreach($this as $activity) {
            if($activity->type->group_id == $groupId) {
                $activitiesInGroup[] = $activity;
            }
        }
        return $activitiesInGroup;
    }

    public function scopeThatAreOfType($query, $type) {
        return $query->where('type_id', $type);
    }

    public function scopeThatBelongToGroup($query, $groupId) {
        $collection = new Collection();
        foreach($query->get() as $activity) {
            if($activity->type->group_id == $groupId) {
                $collection[] = $activity;
            }
        }
        return $collection;
    }

    public function scopeMetricsGraphWidth($query, $typeId) {


        // Total count for selected type
        $selectedTypeCount = $query->thatAreOfType($typeId)->count();
        //dd($selectedTypeCount);
        //dd($query2);

        // Find the total for the group
        $groupId = Type::find($typeId)->first()->group_id;
        $group = Group::find($groupId)->first();
        $typesTiedToGroup = $group ->types()->lists('id');

        // Or for inline...
        // $typesTiesToGroup = Type::find($typeId)->first()->group()->first()->types()->lists('id');

        //dd($typesTiedToGroup);

        $totalsList = [];
        foreach($typesTiedToGroup as $type) {
            $totalsList[$type] = count($query->thatAreOfType($type)->get());
        }

        dd($totalsList);

        // Find the highest Value
        $maxValue = max($totalsList);

        //dd($totalsList);

        if($maxValue == 0) {
            $widthPercent = 0;
        } else {
            $widthPercent = ($selectedTypeCount / $maxValue) * 100;
        }

        return 'width: ' . $widthPercent . '%;';
    }



    public function te() {
        //dd($this);
        $user = \App\User::find(1);

        $stuff = $user->countActivityTypeById($this->id);

        dd($stuff);

    }


    public function scopeCreatedToday($query) {
        return $query->where('created_at', '>=', \Carbon\Carbon::today());
    }

    public function scopeByCurrentUser($query) {
        return $query->where('user_id', 1);
    }

}
