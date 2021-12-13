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


class FinconController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('fincon');
    }

     public function index()
    {

        $unit =  Auth::user()->unit;
        //$backoffice = Customer::select('officer')->where('status',"2")->first();
       // $officer = $backoffice['officer'];

        //$officerunit = User::select()->get();
        //$officerunit = $officerunit['unit']; 


         $backoffice = Customer::select()->where('status',"4")->get();
         $backoffice = count($backoffice);
         

         $consumer = Customer::select()->get();
         $consumer = count($consumer);
        

            

          Session::put('numback',  $backoffice);
       
          Session::put('numcons', $consumer);
      
         return view('fincon');
    }


     public function updaterequest($id)
    {

        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        $prod = Product::all();
        return view('finconupdaterequest')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);
    }

  public function pendingrequest()
    {
        //$unit =  Auth::user()->unit;
        //$officer =  Auth::user()->staffname;
        $cust = Customer::select()->where('status',4)->paginate(10);
        return view('finconpendingrequest')->with('customer',$cust);
    }


  public function declinerequest(request $request)
    {

   $id = $request->cid;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $finconcomment =  $request->comment;

 $customer = Customer::find($id);
 $customer->status = 6;
 $customer->rejectedby = $name;
 $customer->rejectedreason = $finconcomment;
 $customer->save();


 
 
$cust = Customer::select()->where('status',4)->paginate(10);

return view('finconpendingrequest')->with('customer',$cust);


    }



  public function approverequest(request $request)
    {

   $id = $request->cid;
   $amount = $request->amount;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $comment = $request->comment;
   $finconcomment =  "N". $amount.":" . $comment ;

 $customer = Customer::find($id);
 $customer->status = 5;
 $customer->fincon = $name;
 $customer->finconcomment = $finconcomment;
 $customer->save();


 
$cust = Customer::select()->where('status',4)->paginate(10);


return view('finconpendingrequest')->with('customer',$cust);


}



  public function finconapprove($id)
    {
     return view('finconapproveloan')->with('cid',$id);

    }


  public function fincondecline($id)
    {
       return view('fincondeclineloan')->with('cid',$id);
    }




      public function allloan()
    {
        
        $cust = Customer::select()->paginate(10);
        return view('finconallloan')->with('customer',$cust);
    }


      public function viewloan($id)
    {
        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        return view('finconviewloan')->with('customer',$customer)->with('acctinfo',$accountinfo);
    }
    
}
