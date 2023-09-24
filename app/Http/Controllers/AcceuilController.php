<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }
    public function prix()
    {
        return view('prix');
    }
    public function about()
    {
        return view('about');
    }
}
