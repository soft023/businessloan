<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Role;
use App\Product;
use App\Accountinfo;
use App\Customer;
use Session;
use Auth;
class RoController extends Controller
{
   
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('ro');
    }

      public function index()
    {
         $officer =  Auth::user()->staffname;
    	 $backoffice = Customer::select()->where('officer',$officer)->get();
         $backoffice = count($backoffice);
         

         $consumer = Customer::select()->where('status',"6")->where('officer',$officer)->get();
         $consumer = count($consumer);
        

    

        Session::put('numback',  $backoffice);
      
        Session::put('numcons', $consumer);
        

        
        return view('ro');
    }


     public function loanform1()
    {
        $prod = Product::all();
        return view('loanform1')->with('prod',$prod);
    }


  public function confirmloan(Request $request)
    {  
        $prod = Product::all();
        $data = $request->all();
        return view('confirmloandata')->with('prod',$prod)->with('data',$data);
    }

  public function insertloanform(Request $request)
    {  
       
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = $count = $count1 = 0;
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = 0;
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = 0;
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = 0;
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = 0;
     $dr = $dr1 = $dr2 = $dr3 = $dr4 = $dr5 = $dr6 = 0;
     $cr1 = $cr2 = $cr3 = $cr4 = $cr5 = $cr6 = 0;
     $monbal1 = $monbal2 = $monbal3 = $monbal4 = $monbal5 = $monbal6 = 0;
      $amc1 = $amc2 = $amc3 = $amc4 = $amc5 = $amc6 = 0;
      $tot1 = $tot2 = $tot3 = $tot4 = $tot5 = $tot6 = 0;
      $int1 = $int2 = $int3 = $int4 = $int5 = $int6 = 0;


$totmonth = 0;

$m1 = $request->input('1stmon');
$m2 = $request->input('2ndmon');
$m3 = $request->input('3rdmon');
$m4 = $request->input('4thmon');
$m5 = $request->input('5thmon');
$m6 = $request->input('6thmon');



//Num of Month
 if(!empty($m1)){
    $count1 += 1;
    $dr1 = $request->input('1stdr');
    $cr1 = $request->input('1stcr');
    $monbal1 = $request->input('1stmonbal');
    $amc1 = $request->input('1stamc');
    $tot1 = $request->input('1sttot');
    $int1 = $request->input('1stint');

 }

if(!empty($m2)){
$count1 += 1;
$dr2 = $request->input('2nddr');
$cr2 = $request->input('2ndcr');
$monbal2 = $request->input('2ndmonbal');
$amc2 = $request->input('2ndamc');
$tot2 = $request->input('2ndtot');
$int2 = $request->input('2ndint');
 }


if(!empty($m3)){
$count1 += 1;
$dr3 = $request->input('3rddr');
$cr3 = $request->input('3rdcr');
$monbal3 = $request->input('3rdmonbal');
$amc3 = $request->input('3rdamc');
$tot3 = $request->input('3rdtot');
$int3 = $request->input('3rdint');
 }


 if(!empty($m4)){
$count1 += 1;
$dr4 = $request->input('4thdr');
$cr4 = $request->input('4thcr');
$monbal4 = $request->input('4thmonbal');
$amc4 = $request->input('4thamc');
$tot4 = $request->input('4thtot');
$int4 = $request->input('4thint');
 }
if(!empty($m5)){
$count1 += 1;
$dr5 = $request->input('5thdr');
$cr5 = $request->input('5thcr');
$monbal5 = $request->input('5thmonbal');
$amc5 = $request->input('5thamc');
$tot5 = $request->input('5thtot');
$int5 = $request->input('5thint');
 }

 if(!empty($m6)){
$count1 += 1;
$dr6 = $request->input('6thdr');
$cr6 = $request->input('6thcr');
$monbal6 = $request->input('6thmonbal');
$amc6 = $request->input('6thamc');
$tot6 = $request->input('6thtot');
$int6 = $request->input('6thint');
 }


//Tot MOnth Count 
 if ($count1>0){
    $count = $count1; }else{
        $count = 1;
    }
//Av DR
$dr = $dr1 + $dr2 + $dr3 + $dr4 + $dr5 + $dr6 ;
$avdr = $dr / $count;
//AV Credit
$cr = $cr1 + $cr2 + $cr3 + $cr4 + $cr5 + $cr6 ;
$avcr = $cr / $count;
// AV Mon Bal
$monbal = $monbal1 + $monbal2 + $monbal3 + $monbal4 + $monbal5 + $monbal6 ;
$avmonbal = $monbal / $count;
//AV AMC
$amc = $amc1 + $amc2 + $amc3 + $amc4 + $amc5 + $amc6 ;
$avamc = $amc / $count;
// AV TOT
$tot = $tot1 + $tot2 + $tot3 + $tot4 + $tot5 + $tot6 ;
$avtot = $tot / $count;
//AV INT 
$int = $int1 + $int2 + $int3 + $int4 + $int5 + $int6 ;
$avint = $int / $count;
$rate = "";


$t = $request->input('product');

if ($t == "Business Loan"){
$rate = "5% Reducing Balance";
}else{
$rate = "5% Flat";
}
$requestamount = $request->input('requestamount');
$tenure = $request->input('tenure');
$officer =  Auth::user()->staffname;
$officerunit =  Auth::user()->unit;
$app =  $request->input('applicationfee');
$manag =  $request->input('managementfee');
$fees = $app + ($manag/100);

$intate = 0.05 * $tenure;
$totinc = $intate + ($fees );



$lesscost = 0.12 * $requestamount  * $tenure ;

$expectedp = $totinc - $lesscost ;




 $customer = new Customer;
 $customer->firstname  =  $request->input('firstname');
 $customer->lastname =  $request->input('lastname');
 $customer->othername =  $request->input('othername');
 $customer->phoneno =  $request->input('phoneno');
 $customer->bvn =  $request->input('bvn');
 $customer->address =  $request->input('address');
 $customer->business =  $request->input('business');
 $customer->accountnumber =  $request->input('accountnumber');
 $customer->product =  $request->input('product');
 $customer->tenure =  $tenure;
 $customer->rate =   $rate;
 $customer->businessaddress =  $request->input('businessaddress');
 $customer->aboutcustomer =  $request->input('aboutcustomer');
 $customer->businessbackground  =  $request->input('businessbackground');
 $customer->salesreport  =  $request->input('salesreport');
 $customer->financialreview  =  $request->input('financialreview');
 $customer->requestamount =  $requestamount;
 $customer->approveamount =  $request->input('approveamount');
 $customer->purpose =  $request->input('purpose');
 $customer->applicationfee =  $request->input('applicationfee');
 $customer->managementfee =  $request->input('managementfee');
 $customer->penaltyfee =  $request->input('penaltyfee');
 $customer->rocomment=  $request->input('rocomment');
 $customer->insurancefee =  $request->input('insurancefee');
 $customer->repaymentsource =  $request->input('repaymentsource'); 
 $customer->collateral1=  $request->input('collateral1');
 $customer->collateral2 =  $request->input('collateral2');

 $customer->gfirstname1=  $request->input('1stgfirstname');
 $customer->glastname1=  $request->input('1stglastname');
 $customer->gothername1 =  $request->input('1stgothername');
 $customer->gphone1 =  $request->input('1stgphone');
 $customer->gbvn1 =  $request->input('1stgbvn');
 $customer->gaddress1 =   $request->input('1stgaddress');
 $customer->gfirstname2=  $request->input('2ndgfirstname');
 $customer->glastname2=  $request->input('2ndglastname');
 $customer->gothername2 =  $request->input('2ndgothername');
 $customer->gphone2 =  $request->input('2ndgphone');
 $customer->gbvn2 =  $request->input('2ndgbvn');
 $customer->gaddress2 =   $request->input('2ndgaddress');
 $customer->gfirstname3=  $request->input('3rdgfirstname');
 $customer->glastname3=  $request->input('3rdglastname');
 $customer->gothername3 =  $request->input('3rdgothername');
 $customer->gphone3 =  $request->input('3rdgphone');
 $customer->gbvn3 =  $request->input('3rdgbvn');
 $customer->gaddress3 =   $request->input('3rdgaddress');
 $customer->nummonths =   $count;
 $customer->status =   '1';
 $customer->bankname =   $request->input('bankname');
 $customer->avdebit =   $avdr;
 $customer->avcredit =  $avcr;
 $customer->aveod =   $avmonbal;
 $customer->avamc =   $avamc ;
 $customer->avint =   $avint;
 $customer->avtotearning =   $avtot;
 $customer->costoffund =   '12';
 $customer->expectedprofit = $expectedp; 
 $customer->officer =   $officer;
 $customer->officerunit =   $officerunit;
 $customer->save();


            
            
            
              


//Inserting into accountinfo table
    $accountinfo = new Accountinfo;
    $accountinfo->accountnumber = $request->input('accountnumber');
    $accountinfo->month1 = $m1;
    $accountinfo->debit1= $request->input('1stdr');
    $accountinfo->credit1= $request->input('1stcr');
    $accountinfo->eom1=  $request->input('1stmonbal');
    $accountinfo->amc1= $request->input('1stamc');
    $accountinfo->interest1= $request->input('1stint');
    $accountinfo->totalearnings1= $request->input('1sttot');

    $accountinfo->month2= $m2;
    $accountinfo->debit2= $request->input('2nddr');
    $accountinfo->credit2= $request->input('2ndcr');
    $accountinfo->eom2=  $request->input('2ndmonbal');
    $accountinfo->amc2= $request->input('2ndamc');
    $accountinfo->interest2= $request->input('2ndint');
    $accountinfo->totalearnings2= $request->input('2ndtot');

    $accountinfo->month3= $m3;
    $accountinfo->debit3= $request->input('3rddr');
    $accountinfo->credit3= $request->input('3rdcr');
    $accountinfo->eom3=  $request->input('3rdmonbal');
    $accountinfo->amc3= $request->input('3rdamc');
    $accountinfo->interest3= $request->input('3rdint');
    $accountinfo->totalearnings3= $request->input('3rdtot');

    $accountinfo->month4= $m4;
    $accountinfo->debit4= $request->input('4thdr');
    $accountinfo->credit4= $request->input('4thcr');
    $accountinfo->eom4=  $request->input('4thmonbal');
    $accountinfo->amc4= $request->input('4thamc');
    $accountinfo->interest4= $request->input('4thint');
    $accountinfo->totalearnings4= $request->input('4thtot');

    $accountinfo->month5= $m5;
    $accountinfo->debit5= $request->input('5thdr');
    $accountinfo->credit5= $request->input('5thcr');
    $accountinfo->eom5=  $request->input('5thmonbal');
    $accountinfo->amc5= $request->input('5thamc');
    $accountinfo->interest5= $request->input('5thint');
    $accountinfo->totalearnings5= $request->input('5thtot');

    $accountinfo->month6=  $m6;
    $accountinfo->debit6= $request->input('6thdr');
    $accountinfo->credit6= $request->input('6thcr');
    $accountinfo->eom6=  $request->input('6thmonbal');
    $accountinfo->amc6= $request->input('6thamc');
    $accountinfo->interest6= $request->input('6thint');
    $accountinfo->totalearnings6= $request->input('6thtot');

    $accountinfo->save();




         
return redirect('/ro/loanform1')->with("success","Loan request has been submitted Successfully");
   
     }



 public function loanhistory()
    {
        $officer =  Auth::user()->staffname;
        $cust = Customer::where('officer',$officer)->paginate(10);
        return view('roloanhistory')->with('customer',$cust);
    }


 public function rejectedloan()
    {
        $officer =  Auth::user()->staffname;
        $cust = Customer::where([ 
            ['officer',$officer],
            ['status', '6']
        ])->paginate(10);
        return view('rejectedloan')->with('customer',$cust);
    }



 public function editcustomer($id)
    {
        $customer = Customer::all()->where('id',$id);
        $prod = Product::all();
        return view('editcustomer')->with('customer',$customer)->with('prod', $prod);
    }


public function deletecustomer(request $request)
{
    $id = $request->sid;
    Customer::find($id)->delete();
    Accountinfo::find($id)->delete();
    return redirect('/ro/rejectedloan')->with("success","Loan Request Deleted Successfully");
}




 public function viewcustomer($id)
    {
         $customer = Customer::all()->where('id',$id);
         $accountinfo = Accountinfo::all()->where('id',$id);
         $prod = Product::all();
         return view('viewcustomer')->with('customer',$customer)->with('prod', $prod)->with('acctinfo',$accountinfo);


    }











}