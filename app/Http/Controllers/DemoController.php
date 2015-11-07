<?php

namespace App\Http\Controllers;

use App\Card;
use App\CardMechanic;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{

    public function getVueListDemo()
    {
        return CardMechanic::all();
        //return view('vueListDemo');
    }
}
