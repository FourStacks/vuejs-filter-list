<?php

namespace App\Http\Controllers;

use App\Card;
use App\Mechanic;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{

    public function getVueListDemo()
    {
        return Mechanic::all();
        //return view('vueListDemo');
    }
}
