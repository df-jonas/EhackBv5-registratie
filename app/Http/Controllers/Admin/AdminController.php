<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $variables = ['name' => Auth::user()->firstName];
        return view('admin.index', $variables);
    }

    public function statistics()
    {
        return view('admin.statistics');
    }

    public function manage()
    {
        return view('admin.manage');
    }

    public function managePost(Request $request)
    {
        return view('admin.manage');
    }
}