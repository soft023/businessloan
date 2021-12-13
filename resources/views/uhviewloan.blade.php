@extends ('layouts.uhx')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                  
        </li>
        
               <li><br>
                        <a  href="/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a   href="/uh/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
          
                             
                   
                  <li>
                        <a  class="active-menu" href="/uh/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
              <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h4 class="text-center"><b>Credit Appraisal Memorandom</b></h4>
                   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                   <div class="row">
                
                @foreach($customer as $data)


<div class="col-sm-12 col-md-4 col-lg-4">
  <h4><b class="w3-red">Customer and Business Info</b><br>
<h5>First Name : <b>{{ $data['firstname'] }}</b> </h5>
<h5>Contact Line: <b>{{$data['phoneno']}}</b> </h5>

<h5>Home Address : <b>{{$data['address']}}</b></h5>





</div>
<div class="col-sm-12 col-md-4 col-lg-4">
 
 <br/><br/> <h5>Last Name : <b>{{$data['lastname']}}</b></h5>
  <h5>BVN : <b>{{$data['bvn']}}</b></h5>
  

 
  
</div>
<div class="col-sm-12 col-md-4 col-lg-4">
  <br><br>
<h5>Other Name : <b>{{$data['othername']}}</b></h5>
<h5>Account Number : <b>{{$data['accountnumber']}}</b></h5>





</div>

</div>
<hr>

<div class="row ">

  <div class="col-sm-6 col-md-4 col-lg-4">
   <h4><b class="w3-red">Loan Info</b><br></h4>
   <h5>Requested Amount : N<b>{{$data['requestamount']}}</b></h5>
    <h5>Application Fee : N<b>{{$data['applicationfee']}}</b></h5>
    <h5>Penalty Fee :  <b>{{$data['penaltyfee']}}</b></h5>
      <h5>Loan Purpose : <b>{{$data['purpose']}}</b></h5>
    
  </div>   
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
     <h5>Product : <b>{{$data['product']}}</b></h5>
     <h5>Insurance Fee :  <b>{{$data['insurancefee']}} %</b></h5>
     <h5>Collateral : <b>{{$data['collateral1']}}</b></h5>
    <h5>Repayment Source :  <b>{{$data['repaymentsource']}}</b></h5>
  
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
    <h5>Tenure : <b>{{$data['tenure']}}</b> Month(s)</h5>
    <h5>Management Fee : <b>{{$data['managementfee']}}%</b></h5>
    <h5>Collateral 2 : <b>{{$data['collateral2']}}</b></h5>
 
  </div>


</div>  




<hr>



<div class="row ">

  <div class="col-sm-6 col-md-4 col-lg-4">
   <h4><b class="w3-red">Business Info</b><br></h4>
   <h5>Business Type: <b>{{$data['business']}}</b> </h5>

    
  </div>   
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
    <h5>Business Background : <b>{{$data['businessbackground']}}</b></h5>
    
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
   <h5>Sales Report :  <b>{{$data['salesreport']}}</b></h5>
  </div>
</div>   
<div class="row ">

  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>

   <h5>Business Address: <b>{{$data['businessaddress']}}</b> </h5>

    
  </div>   
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>

    <h5>Finance  Review : <b>{{$data['financialreview']}}</b></h5>
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>

  </div>


</div> 


          

<hr>


<div class="row ">
  <div class="col-sm-6 col-md-4 col-lg-4">
   <h4> <b class="w3-red">Guarantor Info - 1</b><br></h4>
   <h5>Firstname : <b>{{$data['gfirstname1']}}</b></h5>
   <h5>Phone Number : <b>{{$data['gphone1']}}</b></h5>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
   <h5>Lastname : <b>{{$data['glastname1']}}</b></h5>
    <h5>BVN : <b>{{$data['gbvn1']}}</b></h5>
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
    <h5>Other Name : <b>{{$data['gothername1']}}</b></h5>
    <h5>Address : <b>{{$data['gaddress1']}}</b></h5>
  </div>

</div>        
           
                            


<div class="row ">
  <div class="col-sm-6 col-md-4 col-lg-4">
   <h4> <b class="w3-red">Guarantor Info - 2</b><br></h4>
   <h5>Firstname : <b>{{$data['gfirstname2']}}</b></h5>
   <h5>Phone Number : <b>{{$data['gphone2']}}</b></h5>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
   <h5>Lastname : <b>{{$data['glastname2']}}</b></h5>
    <h5>BVN : <b>{{$data['gbvn2']}}</b></h5>
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
    <h5>Other Name : <b>{{$data['gothername2']}}</b></h5>
    <h5>Address : <b>{{$data['gaddress2']}}</b></h5>
  </div>
</div>


<div class="row ">
  <div class="col-sm-6 col-md-4 col-lg-4">
   <h4> <b class="w3-red">Guarantor Info - 3</b><br></h4>
   <h5>Firstname : <b>{{$data['gfirstname3']}}</b></h5>
   <h5>Phone Number : <b>{{$data['gphone3']}}</b></h5>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
   <h5>Lastname : <b>{{$data['glastname3']}}</b></h5>
    <h5>BVN : <b>{{$data['gbvn3']}}</b></h5>
  </div>  
  <div class="col-sm-6 col-md-4 col-lg-4"><br><br>
    <h5>Other Name : <b>{{$data['gothername3']}}</b></h5>
    <h5>Address : <b>{{$data['gaddress3']}}</b></h5>
  </div>
</div>

        




  <hr/>


  <div class="row ">
<h4><b class="w3-red">Bank Account Info For {{$data['nummonths']}}Month(s) </b><br></h4>
<h5>Bank Name : <b>{{$data['bankname']}}</b></h5><br>




 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Debit T/O</th>
                                            <th>Credit T/O</th>
                                            <th>Monthend Balance</th>
                                            <th>Maintenance Charge</th>
                                            <th>Total Earnings</th>
                                            <th>Interest</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                              
                                      @foreach($acctinfo as $acct)

                              



                               
                                <tr class="">
                                <td>{{$acct['month1']}}</td>
                                <td>{{$acct['debit1']}}</td>
                                <td>{{$acct['credit1']}}</td>
                                <td>{{$acct['eom1']}}</td>
                                <td>{{$acct['amc1']}}</td>
                                <td>{{$acct['interest1']}}</td>
                                <td>{{$acct['totalearnings1']}}</td>
                                 </tr> <tr class="">
                                <td>{{$acct['month2']}}</td>
                                <td>{{$acct['debit2']}}</td>
                                <td>{{$acct['credit2']}}</td>
                                <td>{{$acct['eom2']}}</td>
                                <td>{{$acct['amc2']}}</td>
                                <td>{{$acct['interest2']}}</td>
                                <td>{{$acct['totalearnings2']}}</td>
                                </tr> <tr class="">

                                <td>{{$acct['month3']}}</td>
                                <td>{{$acct['debit3']}}</td>
                                <td>{{$acct['credit3']}}</td>
                                <td>{{$acct['eom3']}}</td>
                                <td>{{$acct['amc3']}}</td>
                                <td>{{$acct['interest3']}}</td>
                                <td>{{$acct['totalearnings3']}}</td>

                                  </tr> <tr class="">
                                <td>{{$acct['month4']}}</td>
                                <td>{{$acct['debit4']}}</td>
                                <td>{{$acct['credit4']}}</td>
                                <td>{{$acct['eom4']}}</td>
                                <td>{{$acct['amc4']}}</td>
                                <td>{{$acct['interest4']}}</td>
                                <td>{{$acct['totalearnings4']}}</td>

                                </tr> <tr class="">
                                <td>{{$acct['month5']}}</td>
                                <td>{{$acct['debit5']}}</td>
                                <td>{{$acct['credit5']}}</td>
                                <td>{{$acct['eom5']}}</td>
                                <td>{{$acct['amc5']}}</td>
                                <td>{{$acct['interest5']}}</td>
                                <td>{{$acct['totalearnings5']}}</td>

                                </tr> <tr class="">
                                <td>{{$acct['month6']}}</td>
                                <td>{{$acct['debit6']}}</td>
                                <td>{{$acct['credit6']}}</td>
                                <td>{{$acct['eom6']}}</td>
                                <td>{{$acct['amc6']}}</td>
                                <td>{{$acct['interest6']}}</td>
                                <td>{{$acct['totalearnings6']}}</td>
                              </tr>
          </tr> <tr class="">
          <td>Total</td>

<td>{{$acct['debit1'] + $acct['debit2'] + $acct['debit3'] + $acct['debit4'] + $acct['debit5'] + $acct['debit6']}} </td>
<td>{{$acct['credit1'] + $acct['credit2'] + $acct['credit3'] + $acct['credit4'] + $acct['credit5'] + $acct['credit6']}} </td>
<td>{{$acct['eom1'] + $acct['eom2'] + $acct['eom3'] + $acct['eom4'] + $acct['eom5'] + $acct['eom6']}} </td>
<td>{{$acct['amc1'] + $acct['amc2'] + $acct['amc3'] + $acct['amc4'] + $acct['amc5'] + $acct['amc6']}} </td>
<td>{{$acct['interest1'] + $acct['interest2'] + $acct['interest3'] + $acct['interest4'] + $acct['interest5'] + $acct['interest6']}} </td>
<td>{{$acct['totalearnings1'] + $acct['totalearnings2'] + $acct['totalearnings3'] + $acct['totalearnings4'] + $acct['totalearnings5'] + $acct['totalearnings6']}} </td>
         
                              </tr>



                    </tr>
          </tr> <tr class="">
          <td>Average</td>

<td>{{($acct['debit1'] + $acct['debit2'] + $acct['debit3'] + $acct['debit4'] + $acct['debit5'] + $acct['debit6'])/$data['nummonths']}} </td>

<td>{{($acct['credit1'] + $acct['credit2'] + $acct['credit3'] + $acct['credit4'] + $acct['credit5'] + $acct['credit6'])/$data['nummonths']}}    </td>

<td>{{($acct['eom1'] + $acct['eom2'] + $acct['eom3'] + $acct['eom4'] + $acct['eom5'] + $acct['eom6'])/$data['nummonths']}} </td>

<td>{{($acct['amc1'] + $acct['amc2'] + $acct['amc3'] + $acct['amc4'] + $acct['amc5'] + $acct['amc6'])/$data['nummonths']}} </td>

<td>{{($acct['interest1'] + $acct['interest2'] + $acct['interest3'] + $acct['interest4'] + $acct['interest5'] + $acct['interest6'])/$data['nummonths']}} </td>

<td>{{($acct['totalearnings1'] + $acct['totalearnings2'] + $acct['totalearnings3'] + $acct['totalearnings4'] + $acct['totalearnings5'] + $acct['totalearnings6'])/$data['nummonths']}} </td>
         
                              </tr>
  



                               
                                       
                                        

                                    
          
                                     @endforeach
                                      
                                    </tbody>
                                </table>











<br><br>   
{{-- @endforeach --}}
{{-- Account Officer --}}

<h5 class="w3-text-red"> <h4><b class="w3-red">  Account Officer Comment  :  </b> {{$data['officer']}}<br></h4> 
{{$data['rocomment']}}
  </h5>


<h5 class="w3-text-red"> <h4><b class="w3-red">  Account Officer Affirmation  :  </b> {{$data['officer']}}<br></h4> 
By submitting this form to you, I assure that based on my expert knowledge of this customer and businesses hereby propose this loan for approval. I confirm that I have taken all due diligence in the preparation of this Approval Memo and further confirm that I have not received any gratifications in cash or kind for the purpose of securing approval for this request. I hereby undertake that I will monitor this facility diligently and ensure the recovery of same with all best efforts.
  </h5>

{{-- Unit Head  --}}
<h5 class="w3-text-red"> <h4><b class="w3-red">Unit Head:  </b> {{$data['headunit']}}<br></h4> 
Comment :  {{$data['headounitcomment']}}
  </h5>



{{-- Credit  --}}
<h5 class="w3-text-red"> <h4><b class="w3-red">Credit Analyst:  </b> {{$data['credit']}}<br></h4> 
Comment :  {{$data['creditcomment']}}
  </h5>


{{-- Internal Control  --}}
<h5 class="w3-text-red"> <h4><b class="w3-red">Internal Control:  </b> {{$data['control']}}<br></h4> 
Comment :  {{$data['controlcomment']}}
  </h5>


{{-- Financial Controller  --}}
<h5 class="w3-text-red"> <h4><b class="w3-red">Financial Controller:  </b> {{$data['fincon']}}<br></h4> 
Comment :  {{$data['finconcomment']}}
  </h5>


{{-- MD | CEO  --}}
<h5 class="w3-text-red"> <h4><b class="w3-red">MD | CEO  </b> {{$data['md']}}<br></h4> 
Approval :  {{$data['mdcomment']}}
  </h5>

{{-- MD | CEO  --}}
@if (!@empty ($data['rejectedby']))
<h5 class="w3-text-red"> <h4><b class="w3-red">Rejected By:  </b> {{$data['rejectedby']}}<br></h4> 
Comment :  {{$data['rejectedreason']}}
  </h5>
@endif

<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4 text-left"></div>
  <div class="col-sm-12 col-md-4 col-lg-4  text-center"><br><br><br><a class="btn btn-lg btn-primary " href="{{ URL::previous() }}" ><i class=""></i><b>Back</b></a></div>
  <div class="col-sm-12 col-md-4 col-lg-4 text-left"><br><br><br>
  
  </div>
</div><br><br><br><br><br><br>
    @endforeach               
                 <!-- /. ROW  -->
                <hr />                
                




                






@endsection