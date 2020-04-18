<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\League;

class HomeController extends Controller
{
    public function index(){
        $results = Result::take(10)->get();
        $leagues = League::where('active', 1)->take(5)->get();
        return view('welcome', array('results' => $results, 'leagues' => $leagues));
    }
}
