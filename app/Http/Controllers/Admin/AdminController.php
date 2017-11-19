<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\ActivityGroup;
use App\Game;
use App\Http\Controllers\Controller;
use App\Team;
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

        $activities = Activity::with('users')->get();

        $games = Game::with('teams')->get();

        $variables = [
            'useramount' => $userAmount,
            'activities' => $activities,
            'games' => $games,
        ];

        return view('admin.statistics', $variables);
    }

    public function manage($error = -1, $errormsg = null)
    {
        $activitygroups = ActivityGroup::all();

        $activities = Activity::all();

        $games = Game::all();

        $variables = [
            'error' => $error,
            'errormsg' => $errormsg,
            'categories' => $activitygroups,
            'activities' => $activities,
            'games' => $games,
        ];

        return view('admin.manage', $variables);
    }

    public function manageActivity($error = -1, $errormsg = null)
    {
        $activitygroups = ActivityGroup::all();

        $activities = Activity::all();

        $variables = [
            'error' => $error,
            'errormsg' => $errormsg,
            'categories' => $activitygroups,
            'activities' => $activities,
        ];

        return view('admin.manageActivity', $variables);
    }

    public function manageGame($error = -1, $errormsg = null)
    {
        $games = Game::all();

        $variables = [
            'error' => $error,
            'errormsg' => $errormsg,
            'games' => $games,
        ];

        return view('admin.manageGame', $variables);
    }

    public function managePostActivity(Request $request)
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

        return $this->manageActivity($error);
    }

    public function managePostGame(Request $request)
    {
        $error = 1;

        if (isset($request->formtype)) {

            switch ($request->formtype) {
                case "newgame":
                    if (isset($request->name) && isset($request->maxpersons) && isset($request->maxteams)
                        && $request->name != "" && $request->maxpersons > 0 && $request->maxteams > 0) {

                        $a = new Game();

                        $a->name = $request->name;
                        $a->maxPlayers = $request->maxpersons;
                        $a->maxTeams = $request->maxteams;

                        if (isset($request->isSingle) || $request->maxpersons == 1) {
                            $a->isSingleplayer = 1;
                        } else {
                            $a->isSingleplayer = 0;
                        }

                        $a->save();

                        $error = 0;
                    } else {
                        $error = 1;
                    }
                    break;

                case "editgame":
                    if (isset($request->id) && isset($request->name) && isset($request->maxpersons) && isset($request->maxteams)
                        && Game::find($request->id) != null && $request->name != "" && $request->maxpersons > 0 && $request->maxteams > 0) {

                        $a = Game::find($request->id);

                        $a->name = $request->name;
                        $a->maxPlayers = $request->maxpersons;
                        $a->maxTeams = $request->maxteams;

                        if (isset($request->isSingle) || $request->maxpersons == 1) {
                            $a->isSingleplayer = 1;
                        } else {
                            $a->isSingleplayer = 0;
                        }

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

        return $this->manageGame($error);
    }

    public function jsonServiceActivity($activity_id)
    {
        $a = Activity::find($activity_id);

        if ($a != null) {
            return response()->json($a, 200);
        }

        return response()->json(Activity::first(), 200);
    }

    public function jsonServiceGame($game_id)
    {
        $a = Game::find($game_id);

        if ($a != null) {
            return response()->json($a, 200);
        }

        return response()->json(Game::first(), 200);
    }
}