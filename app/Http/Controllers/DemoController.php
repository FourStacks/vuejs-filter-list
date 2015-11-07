<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{

    public function getVueListDemo()
    {
        return Card::all();
        //return view('vueListDemo');
    }
}
