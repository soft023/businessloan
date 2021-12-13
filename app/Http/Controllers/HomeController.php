<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }


      public function showdashboard()
    {
        $role  = Auth()->user()->role;

         switch ($role) {
              case 'SA':
                  $view = '/superadmin';
                  break;
              
               case 'IC':
                  $view ='/control';
                  break;

                case 'FC':
                  $view = '/fincon' ;
                  break;

                case 'CA':
                  $view = '/ca' ;
                  break;

                  case 'UH':
                  $view = '/uh' ;
                  break;

                case 'MD':
                  $view = '/md';
                  break;
                
              default:
                 $view = '/ro' ;
                  break;
          }

         return redirect($view);
    }




}
