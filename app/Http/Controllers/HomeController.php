<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vac;

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
     * @return \Illuminate\Http\Response
     */
    public function index(){

       $search = \Request::get('search'); //<-- we use global request to get the param of URI

       $vacs = Vac::where('vacbedrijf','like','%'.$search.'%')
       ->orderBy('vacnaam')
       ->paginate(10);

      return view('home',compact('home'), ['vacs' => $vacs]);
    }
    public function admin(){
      return view('/admin/admin');
    }

  }
