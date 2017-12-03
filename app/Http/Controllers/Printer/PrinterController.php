<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 3/12/2017
 * Time: 10:47
 */

namespace App\Http\Controllers\Printer;

use App\Http\Controllers\Controller;

class PrinterController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function detail($id)
    {
        return view("welcome");
    }
}