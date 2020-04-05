<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resController extends Controller
{
    //
    public function index()
    {
        echo "index";
    }
    public function create()
    {
        echo "create";
    }
    public function show($id)
    {
        echo $id;
    }
    public function edit()
    {
        echo "edit";
    }
}
