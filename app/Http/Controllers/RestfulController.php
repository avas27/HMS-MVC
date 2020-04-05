<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestfulController extends Controller
{
    public function index()
    {
        echo '<br>Index';
    }

    public function create()
    {
        echo '<br>create';
    }
    public function show($id)
    {
        echo '<br>' . $id;
    }
}
