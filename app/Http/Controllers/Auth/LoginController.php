<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/showdashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


      protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
 
        
        $role  = $this->guard()->user()->role;
        
       
          switch ($role) {
              case 'SA':
                  return redirect('/superadmin');
                  break;
              
               case 'IC':
                  return redirect('/control');
                  break;

                case 'FC':
                  return redirect('/fincon');
                  break;

                case 'CA':
                  return redirect('/ca');
                  break;

                  case 'UH':
                  return redirect('/uh');
                  break;

                case 'MD':
                  return redirect('/md');
                  break;
                
              default:
                 return redirect('/ro');
                  break;
          }
        
    }



}
