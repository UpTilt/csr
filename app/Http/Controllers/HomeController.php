<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Activity;
use App\Downtime;
use App\Goals;
use App\User;

class HomeController extends Controller
{

    public function getIndex() {
        //$user = Auth::user();
        $user = \App\User::find(1);

        $goal = [
            'daily_goal' => 70,
            'dept_goal' => 1350
        ];

        dd(Goals::all()->first()->daily_goal);

//        $downtime = [
//            'reason_id' => 1,
//            'start_time' => '12:00',
//            'end_time' => '13:00',
//            'duration' => 1,
//            'notes' => 'This is where da notez go!'
//        ];
//
//        $user->downtime()->save(new Downtime($downtime));

        dd($user->downtime->first()->notes);

        foreach($user->activities as $activity) {
            dd($activity->type->group->name);
            dd($activity->test());
            dd(\App\Type::find($activity->type_id)->weight);
            dd($activity->type->weight);
        }
        //dd($user->activities);
        //return view('test.index');
        dd('end');
    }


    public function getTest(Request $request) {

        //$user = Auth::user();

        $user = \App\User::find(1);

        $activity = [
            'service_order' => '01320-987654321',
            'type_id' => rand(1, 20)
        ];

//        $activity = [
//            'service_order' => $request->input()->only('service_order'),
//            'type_id' => $request->input()->only('type_id')
//        ];

        $row = $user->activities()->save(new Activity($activity));

        if($row) {
            return response()->json('Saved yo!', 200);
        }

        return response()->json('Phailed dood!', 500);

    }

    public function testIndex() {
        $user = User::find(1);
        $dailyGoal = Goals::all()->first();

        //dd($user->countActivityTypeById(5));

        $user->InitHoursForToday();

        $types = \App\Type::all();

//        dd($user->sortActivitiesCompleted)
//
//        dd($user->calculateGraphWidthById(5));

        $array = [];

        foreach($types as $type) {
            $array[$type->group->name][] = [$type->label->name, $type->id];
        }

//        dd($user->calculateProd());
//        dd(($user->currentProd() / $user->calculateProd()) * 100 . '%');
//        dd($user->currentProd());
//        dd($user->calculateProd());
//        dd($user->hoursToday()->updateHours(6));
//        dd($user->setInitialHours());
//
//        dd($user->currentProd($user));

        return view('test.index', ['user' => $user, 'dailyGoal' => $dailyGoal, 'groups' => \App\Group::all()]);

    }



    public function query() {

        $user = \App\User::find(1);

        $usersActivities = $user->activitiesEnteredToday();






    }







    public function postLogin(Request $request) {
        // Gather user input and create validator instance
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Attempt login with credentials
        $authAttempt = Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password'),]);

        if(!$authAttempt) {
            return response()->json(['error' => 'Credentials do not match'], 500);
        }

        // Everything passed
        Auth::user()->InitHoursForToday();

        return redirect()->route('admin.raffle');
    }

}
