<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Unit;
use App\Role;
use App\Product;
use App\Accountinfo;
use Session;
use Auth;
class UhController extends Controller
{
     

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('uh');
    }

      public function index()
    {

        $unit =  Auth::user()->unit;
    	$backoffice = Customer::select('officer')->where('status',"1")->first();
        $officer = $backoffice['officer'];

        $officerunit = User::select('unit')->where('staffname', $officer)->first();
        $officerunit = $officerunit['unit']; 


         $backoffice = Customer::select()->where('status',"1")->where('officerunit', $unit)->get();
         $backoffice = count($backoffice);
         

         $consumer = Customer::select()->where('officerunit', $unit)->get();
         $consumer = count($consumer);
        

            

          Session::put('numback',  $backoffice);
       
          Session::put('numcons', $consumer);
      
         return view('uh');
    }


     public function updaterequest($id)
    {
       $accountinfo = Accountinfo::all()->where('id',$id);
        $customer = Customer::all()->where('id',$id);
        $prod = Product::all();
        return view('uhupdaterequest')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);

    
    }

  public function pendingrequest()
    {
        $unit =  Auth::user()->unit;
        $officer =  Auth::user()->staffname;
        $cust = Customer::select()->where('status',1)->where('officerunit', $unit)->paginate(10);
        return view('uhpendingrequest')->with('customer',$cust);
    }


  public function declinerequest(request $request)
    {
        $id = $request->cid;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $uhcomment =  $request->comment;

 $customer = Customer::find($id);
 $customer->status = 6;
 $customer->rejectedby = $name;
 $customer->rejectedreason = $uhcomment;
 $customer->save();


 
$unit =  Auth::user()->unit;
 
$cust = Customer::select()->where('status',1)->where('officerunit', $unit)->paginate(10);

return view('uhpendingrequest')->with('customer',$cust);


    }



  public function approverequest(request $request)
    {

   $id = $request->cid;
   $amount = $request->amount;
   $comment = $request->comment;
   $name = Auth::user()->staffname;
   $comment = $request->comment;
   $uhcomment =  "N". $amount.":" . $comment ;

 $customer = Customer::find($id);
 $customer->status = 2;
 $customer->headunit = $name;
 $customer->headounitcomment = $uhcomment;
 $customer->save();




$unit =  Auth::user()->unit;
 
$cust = Customer::select()->where('status',1)->where('officerunit', $unit)->paginate(10);


 return view('uhpendingrequest')->with('customer',$cust);


}



  public function uhapprove($id)
    {
     return view('uhapproveloan')->with('cid',$id);

    }


  public function uhdecline($id)
    {
       return view('uhdeclineloan')->with('cid',$id);
    }




      public function allloan()
    {
        $unit =  Auth::user()->unit;
        $cust = Customer::select()->where('officerunit', $unit)->paginate(10);
        return view('uhallloan')->with('customer',$cust);
    }


      public function viewloan($id)
    {
         $accountinfo = Accountinfo::all()->where('id',$id);
       $customer = Customer::all()->where('id',$id);
        return view('uhviewloan')->with('customer',$customer)->with('acctinfo',$accountinfo);

    }

}
