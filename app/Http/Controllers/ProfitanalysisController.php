<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profitanalysis;
use App\User;
use App\Unit;
use App\Role;
use Session;
use Auth;
use App\Accountinfo;
use App\Product;
use App\Customer;


class ProfitanalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
$this->middleware('auth');
$this->middleware('ca');
}




    public function profitexp(Request $request)
    {
        $data = $request->all();
        $id = session('cid');
        $mnt = session('months');


$pro = Profitanalysis::select()->where('cid',$id)->get();
if(empty($pro)){
for( $x = 1; $x<=$mnt; $x++){
$profit =  new Profitanalysis;
$profit->cid = $id;
$profit->sellingprice =  $request->input('sellingprice');
$profit->costprice= $request->input('costprice');
$profit->salaries= $request->input('salaries'.$x);
$profit->rent= $request->input('rent'.$x);
$profit->utility= $request->input('utilities'.$x);
$profit->transportation= $request->input('transportation'.$x);
$profit->servicecharge= $request->input('servicecharge'.$x);
$profit->food= $request->input('food'.$x);
$profit->loanrepayment= $request->input('loanrepayment'.$x);
$profit->others= $request->input('others'.$x);
$profit->save();

}}






        $sell = $request->input('sellingprice');
        $cost = $request->input('costprice');
        $margin = ($sell - $cost )/$sell;
        Session::put('margin',  $margin);


       
        $customer = Customer::all()->where('id',$id);
        $accountinfo = Accountinfo::all()->where('id',$id);

      return view('profitanalysistable')->with('customer',$customer)->with('acctinfo',$accountinfo)->with('data',$data);
    }
}
    /**
     * Show the form for creating a new resource.
     *
    
}
