<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\League;
use App\NextRace;
use Carbon\Carbon;
use App\Contact;

class HomeController extends Controller
{
    public function index(){
        $results = Result::orderBy('id', 'DESC')->take(10)->get();
        $leagues = League::where('active', 1)->orderBy('id', 'DESC')->take(5)->get();
        $nextRace = NextRace::whereDate('date', '>', Carbon::now())->orderBy('date', 'ASC')->first();
        $contact = Contact::all();
        return view('welcome', array('results' => $results, 'leagues' => $leagues, 'next_race' => $nextRace, 'contacts' => $contact));
    }
}
