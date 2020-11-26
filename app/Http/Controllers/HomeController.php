<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\League;
use App\NextRace;
use Carbon\Carbon;
use App\Contact;
use App\Driver;
use App\Partner;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $results = Result::orderBy('id', 'DESC')->take(10)->get();
        $leagues = League::where('active', 1)->orderBy('id', 'DESC')->take(5)->get();
        $nextRace = NextRace::whereTime('date', '>=', Carbon::now())->orderBy('date', 'ASC')->first();
        $contact = Contact::all();
        $drivers = Driver::where('active', 1)->get();
        $partners = Partner::where('active', 1)->get();
        $files = Storage::files('public/gallery');
        return view('welcome', array('results' => $results, 'leagues' => $leagues, 'next_race' => $nextRace, 'contacts' => $contact, 'drivers' => $drivers, 'partners' => $partners, 'files' => $files));
    }
}
