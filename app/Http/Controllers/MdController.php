<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Role;
use Session;
use Auth;
use App\Product;
use App\Accountinfo;
use App\Customer;

class MdController extends Controller
{
    //
         public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('md');
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


         $pending = Customer::select()->where('status',"5")->get();
         $pendoffice = count($pending);
         

         $pendingx = Customer::select()->get();
         $pendingoofficex = count($pendingx);
        

        Session::put('numback',  $backoffice);
        Session::put('numprem', $premium );
        Session::put('numcons', $consumer);
        Session::put('nummicro', $micro);
        Session::put('nummicrox', $pendoffice);
        Session::put('nummicroxx', $pendingoofficex);
        
        return view('md');
    }

  public function showmdusers()
    {
        $users = User::all();
        return view('mdallusers')->with('users',$users);
    }

  public function showmdunits()
    {
        $units = Unit::all();
        return view('mdallunits')->with('units',$units);
    }


      public function showmdroles()
    {
        $roles = Role::all();
        return view('mdallroles')->with('roles',$roles);
    }






     public function updaterequest($id)
    {
        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        $prod = Product::all();
        return view('mdupdaterequest')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);
    }

  public function pendingrequest()
    {
        //$unit =  Auth::user()->unit;
        //$officer =  Auth::user()->staffname;
        $cust = Customer::select()->where('status',5)->paginate(10);
        return view('mdpendingrequest')->with('customer',$cust);
    }


  public function declinerequest(request $request)
    {

   $id = $request->cid;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $mdcomment =  $request->comment;

 $customer = Customer::find($id);
 $customer->status = 6;
 $customer->rejectedby = $name;
 $customer->rejectedreason = $mdcomment;
 $customer->save();


 
 
$cust = Customer::select()->where('status',5)->paginate(10);

return view('mdpendingrequest')->with('customer',$cust);


    }



  public function approverequest(request $request)
    {

   $id = $request->cid;
   $amount = $request->amount;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $comment = $request->comment;
   $mdcomment =  "N". $amount.":" . $comment ;

 $customer = Customer::find($id);
 $customer->status = 7;
 $customer->md = $name;
 $customer->mdcomment = $mdcomment ;
 $customer->approveamount = $amount ;
 $customer->save();


 
$cust = Customer::select()->where('status',5)->paginate(10);


return view('mdpendingrequest')->with('customer',$cust);


}



  public function mdapprove($id)
    {
     return view('mdapproveloan')->with('cid',$id);

    }


  public function mddecline($id)
    {
       return view('mddeclineloan')->with('cid',$id);
    }




      public function allloan()
    {
        
        $cust = Customer::select()->paginate(10);
        return view('mdallloan')->with('customer',$cust);
    }


      public function viewloan($id)
    {
        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        return view('mdviewloan')->with('customer',$customer)->with('acctinfo',$accountinfo);
    }


}
