<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Role;
use Session;
use Auth;
use App\Accountinfo;
use App\Product;
use App\Customer;


class CaController extends Controller
{


public function __construct()
{
$this->middleware('auth');
$this->middleware('ca');
}


public function index()
{

$unit =  Auth::user()->unit;
//$backoffice = Customer::select('officer')->where('status',"2")->first();
// $officer = $backoffice['officer'];

//$officerunit = User::select()->get();
//$officerunit = $officerunit['unit']; 


$backoffice = Customer::select()->where('status',2)->get();
$backoffice = count($backoffice);


$consumer = Customer::select()->get();
$consumer = count($consumer);




Session::put('numback',  $backoffice);

Session::put('numcons', $consumer);

return view('ca');
}


public function updaterequest($id)
{
$accountinfo = Accountinfo::all()->where('id',$id);
$customer = Customer::all()->where('id',$id);
$prod = Product::all();
return view('creditupdaterequest')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);
}

public function pendingrequest()
{
//$unit =  Auth::user()->unit;
//$officer =  Auth::user()->staffname;
$cust = Customer::select()->where('status',2)->paginate(10);
return view('creditpendingrequest')->with('customer',$cust);
}


public function declinerequest(request $request)
{

$id = $request->cid;
$comment = $request->comment;
$name = Auth::user()->staffname;
$cacomment =  $request->comment;

$customer = Customer::find($id);
$customer->status = 6;
$customer->rejectedby = $name;
$customer->rejectedreason = $cacomment;
$customer->save();




$cust = Customer::select()->where('status',2)->paginate(10);

return view('creditpendingrequest')->with('customer',$cust);


}



public function approverequest(request $request)
{

$id = $request->cid;
$amount = $request->amount;
$comment = $request->comment;
$name = Auth::user()->staffname;
$comment = $request->comment;
$cacomment =  "N". $amount.":" . $comment ;

$customer = Customer::find($id);
$customer->status = 3;
$customer->credit = $name;
$customer->creditcomment = $cacomment;
//$customer->save();





//$accountinfo = Accountinfo::all()->where('id',$id);
$months = Customer::select('nummonths')->where('id',$id)->get();
$month = $months[0]['nummonths'];
Session::put('months',  $month);
Session::put('cid',  $id);


return view('profitanalysis');


}



public function caapprove($id)
{
return view('creditapproveloan')->with('cid',$id);

}


public function cadecline($id)
{
return view('creditdeclineloan')->with('cid',$id);
}




public function allloan()
{

$cust = Customer::select()->paginate(10);
return view('creditallloan')->with('customer',$cust);
}


public function viewloan($id)
{
$accountinfo = Accountinfo::all()->where('id',$id);
$customer = Customer::all()->where('id',$id);
return view('creditviewloan')->with('customer',$customer)->with('acctinfo',$accountinfo);
}


public function viewapprovedloan($id)
{
$accountinfo = Accountinfo::all()->where('id',$id);
$customer = Customer::all()->where('id',$id);
return view('printcertificate')->with('customer',$customer)->with('acctinfo',$accountinfo);
}





public function approvedloans()
{
$cust = Customer::select()->where('status',7)->paginate(10);
return view('creditallappoved')->with('customer',$cust);
}


}