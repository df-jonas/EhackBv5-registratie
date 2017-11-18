<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\ActivityGroup;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $firstname = Auth::user()->firstName;

        $variables = [
            'name' => $firstname,
        ];

        return view('admin.index', $variables);
    }

    public function statistics()
    {
        $userAmount = User::all()->where('isAdmin', '!=', '1')->count();

        $variables = [
            'useramount' => $userAmount,
        ];

        return view('admin.statistics', $variables);
    }

    public function manage($error = -1, $errormsg = null)
    {
        $activitygroups = ActivityGroup::all();

        $activities = Activity::all();

        $variables = [
            'error' => $error,
            'errormsg' => $errormsg,
            'categories' => $activitygroups,
            'activities' => $activities,
        ];

        return view('admin.manage', $variables);
    }

    public function managePost(Request $request)
    {
        $error = 1;

        if (isset($request->formtype)) {

            switch ($request->formtype) {
                case "newactivity":
                    if (isset($request->name) && isset($request->maxpersons) && isset($request->groupid) && isset($request->desc)
                        && $request->name != "" && $request->maxpersons > 0 && ActivityGroup::find($request->groupid) != null) {

                        $a = new Activity();

                        $a->name = $request->name;
                        $a->maxUsers = $request->maxpersons;
                        $a->activityGroupID = $request->groupid;
                        $a->description = $request->desc;

                        $a->save();

                        $error = 0;
                    } else {
                        $error = 1;
                    }
                    break;

                case "editactivity":
                    if (isset($request->id) && isset($request->name) && isset($request->maxpersons) && isset($request->groupid) && isset($request->desc)
                        && Activity::find($request->id) != null && $request->name != "" && $request->maxpersons > 0 && ActivityGroup::find($request->groupid) != null) {

                        $a = Activity::find($request->id);

                        $a->name = $request->name;
                        $a->maxUsers = $request->maxpersons;
                        $a->activityGroupID = $request->groupid;
                        $a->description = $request->desc;

                        $a->save();

                        $error = 0;
                    } else {
                        $error = 1;
                    }
                    break;

                default:
                    $error = 1;
                    break;
            }
        }

        return $this->manage($error);
    }

    public function jsonService($activity_id)
    {
        $a = Activity::find($activity_id);

        if ($a != null) {
            return response()->json($a, 200);
        }

        return response()->json(Activity::first(), 200);
    }
}