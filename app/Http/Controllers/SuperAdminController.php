<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Role;
use Session;


class SuperAdminController extends Controller
{
    

      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('superadmin');
       
    }




  public function index()
    {
         $backoffice = User::select()->where('unit',"Back Office")->get();
         $backoffice = count($backoffice);
         

         $consumer = User::select()->where('unit',"Consumer")->get();
         $consumer = count($consumer);
        

         $premium = User::select()->where('unit',"Premium")->get();
         $premium = count($premium);
         
         $micro = User::select()->where('unit',"Micro Credit")->get();
         $micro = count($micro);

        Session::put('numback',  $backoffice);
        Session::put('numprem', $premium );
        Session::put('numcons', $consumer);
        Session::put('nummicro', $micro);

        return view('superadmin');
}


  public function showusers()
    {
        $users = User::paginate(5);
        return view('manageusers')->with('users',$users);
    }



public function deletestaff(request $request)
{
    $id = $request->sid;
    User::find($id)->delete();
    return redirect('/manageruser')->with("success","User deleted Successfully");
}








  // public function showunits()
  //   {
  //       $units = Role::all();
  //       return view('allunits')->with('units',$units);
  //   }


  //     public function showroles()
  //   {
  //       $roles = Unit::all();
  //       return view('allroles')->with('roles',$roles);
  //   }

   

    //
}
