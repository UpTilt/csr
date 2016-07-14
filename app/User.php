<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Activity;
use App\Downtime;
use App\Goals;
use App\Hours;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /*-------------------------------------------------
     *  Relationships
     */

    public function activities() {
        return $this->hasMany('App\Activity');
    }

    public function hours() {
        return $this->hasMany('App\Hours');
    }

    public function downtime() {
        return $this->hasMany('App\Downtime');
    }


    /*-------------------------------------------------
     *  Query things yo
     */

    // Must be called with ()!
    public function hoursEntryForToday() {
        return $this->hours()->where('created_at', '>=', Carbon::today())->first();
    }

    public function hoursWorkedToday() {
        return $this->hours()->where('created_at', '>=', Carbon::today())->first()->hours;
    }

    public function hoursExemptToday() {
        return $this->hours()->where('created_at', '>=', Carbon::today())->first()->exempt;
    }

    public function activitiesEnteredToday() {
        return $this->hasMany('App\Activity')->where('created_at', '>=', Carbon::today());
    }

    public function countActivityTypeById($typeId) {
        return $this->activitiesEnteredToday()->thatAreOfType($typeId)->count();
    }

    /*-------------------------------------------------
     *  Calculation and helper functions
     */

    public function currentProdSum() {
        $prod = '';
        foreach($this->activitiesEnteredToday as $activity) {
            $prod += $activity->type->weight;
        }
        return $prod;
    }

    public function calculateProd() {
        $dailyGoal = Goals::all()->first()->daily_goal;
        $currentUsersHours = $this->hoursWorkedToday();

        return ($currentUsersHours * ($dailyGoal / 8 ));
    }

    public function InitHoursForToday() {
        if(!$this->hoursEntryForToday()) {

            $dailyGoal = Goals::all()->first()->daily_goal;

            $setHours = [
                'hours' => 8,
                'daily_goal' => $dailyGoal
            ];

            $this->hours()->save(new Hours($setHours));

            return true;
        }
        return true;
    }


    /*
     * UUUGGGHHHH! I don't like having to put this here!
     * Is there some way that I can put it in the activities model??
     */
    public function metricsGraphWidthForType($typeId) {
        $group = \App\Type::find($typeId)->first()->group_id;

        // Total count for selected type
        $selectedTypeCount = $this->countActivityTypeById($typeId);

        // Find the total for the group
        $groupId = Type::find($typeId)->group_id;
        $group = Group::find($groupId);
        $typesTiedToGroup = $group->types()->lists('id');

        $totalsList = [];
        foreach($typesTiedToGroup as $type) {
            $totalsList[$type] = $this->countActivityTypeById($type);
        }

        // Find the highest Value
        $maxValue = max($totalsList);

        if($maxValue == 0) {
            $widthPercent = 0;
        } else {
            $widthPercent = ($selectedTypeCount / $maxValue) * 100;
        }

        return 'width: ' . $widthPercent . '%;';
    }


}
