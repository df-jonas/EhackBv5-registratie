<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 3/12/2017
 * Time: 10:47
 */

namespace App\Http\Controllers\Printer;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("printer.index", array("users" => $users));
    }

    public function detail($id)
    {
        return view("welcome");
    }

    public function search(Request $request)
    {
        if (isset($request->q)) {
            $users = User::query()
                ->select('id', 'firstName', 'lastName', 'email', 'confirmed', 'isPresent')
                ->where('firstName', 'LIKE', '%' . $request->q . '%')
                ->orWhere('lastName', 'LIKE', '%' . $request->q . '%')
                ->orWhere('email', 'LIKE', '%' . $request->q . '%')
                ->get();
        } else {
            $users = User::all();
        }

        return response()->json($users, 200);
    }
}