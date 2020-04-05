<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(Request $request)
    {
        echo "We are spaeking from the redirections";
        print_r($request->input());
        echo ($request->url());
    }
}
