<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Role;
use App\Accountinfo;
use Session;
use Auth;
use App\Product;
use App\Customer;

class IcController extends Controller
{
   
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('control');
    }

      public function index()
    {

        $unit =  Auth::user()->unit;
        //$backoffice = Customer::select('officer')->where('status',"2")->first();
       // $officer = $backoffice['officer'];

        //$officerunit = User::select()->get();
        //$officerunit = $officerunit['unit']; 


         $backoffice = Customer::select()->where('status',3)->get();
         $backoffice = count($backoffice);
         

         $consumer = Customer::select()->get();
         $consumer = count($consumer);
        

            

          Session::put('numback',  $backoffice);
       
          Session::put('numcons', $consumer);
      
         return view('control');
    }


     public function updaterequest($id)
    {
        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        $prod = Product::all();
        return view('controlupdaterequest')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);
    }

  public function pendingrequest()
    {
        //$unit =  Auth::user()->unit;
        //$officer =  Auth::user()->staffname;
        $cust = Customer::select()->where('status',3)->paginate(10);
        return view('controlpendingrequest')->with('customer',$cust);
    }


  public function declinerequest(request $request)
    {

   $id = $request->cid;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $controlcomment =  $request->comment;

 $customer = Customer::find($id);
 $customer->status = 6;
 $customer->rejectedby = $name;
 $customer->rejectedreason = $controlcomment;
 $customer->save();


 
 
$cust = Customer::select()->where('status',3)->paginate(10);

return view('controlpendingrequest')->with('customer',$cust);


    }



  public function approverequest(request $request)
    {

   $id = $request->cid;
   $amount = $request->amount;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $comment = $request->comment;
   $controlcomment =  "N". $amount.":" . $comment ;

 $customer = Customer::find($id);
 $customer->status = 4;
 $customer->control = $name;
 $customer->controlcomment = $controlcomment;
 $customer->save();


 
$cust = Customer::select()->where('status',3)->paginate(10);


return view('controlpendingrequest')->with('customer',$cust);


}



  public function controlapprove($id)
    {
     return view('controlapproveloan')->with('cid',$id);

    }


  public function controldecline($id)
    {
       return view('controldeclineloan')->with('cid',$id);
    }




      public function allloan()
    {
        
        $cust = Customer::select()->paginate(10);
        return view('controlallloan')->with('customer',$cust);
    }


      public function viewloan($id)
    {
        $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        return view('controlviewloan')->with('customer',$customer)->with('acctinfo',$accountinfo);
    }
    
}
