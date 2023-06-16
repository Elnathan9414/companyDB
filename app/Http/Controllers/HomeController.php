<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;
use App\Models\User;
use App\Models\pays;
use App\Models\villes;
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
     $nbville = DB::table('villes')
             ->count();
     $nbcommune = DB::table('communes')
             ->count();
     $nbsecteur = DB::table('secteurs')
             ->count();
     $nbentreprise = DB::table('entreprises')
             ->count();

        //données des diagrammes
        $data= collect();
        //$utilisateurs = villes::with("name", "email")->get();
        return view('home', compact('users', 'nbpays','nbville','nbcommune','nbsecteur','nbentreprise'));
    }

    
}
