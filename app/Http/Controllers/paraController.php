<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class paraController extends Controller
{
    public function pass(Request $request, $id, $course)
    {
        $sub = DB::select("select * from employee");
        $empSal = DB::select("select avg(salary) as avg,max(salary) as max from employee");
        echo $request->url();
        return view("paraView", ["id" => $id, "course" => $course, "sub" => $sub, "empSal" => $empSal]);
    }
}
