<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;
use App\Models\User;
use App\Models\pays;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $nbcommune=Commune::where('id')->count();
       //$user=User::all();
       //$user =DB::table('users')->where('name', 'elnathan')->first();
       $users = DB::table('users')
             ->count();
        
     $nbpays = DB::table('pays')
             ->count();
        return view('home', compact('users', 'nbpays'));
    }

    
}
