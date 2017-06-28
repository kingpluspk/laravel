<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use Test;

class HelloWorldController extends Controller
{
    public function __construct()
    {

    }

    public function helloworld()
    {
        Test::helloTestService();
//        App::make('testservice')->helloTestService();
    }


}
