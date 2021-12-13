@extends ('layouts.romain')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                 
				</li>
				
					
                    <li>
                        <a   href="/dashboard"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  class="active-menu" href="#"><i class="fa fa-qrcode fa-3x"></i>Initiate Loan</a>
                    </li>
					
                  
                  <li>
                        <a  href="/ro/rejectedloan"><i class="fa fa-square-o fa-3x"></i> Rejected Loans</a>
                    </li> 
					                   
                   
                  <li  >
                        <a  href="/ro/loanhistory"><i class="fa fa-square-o fa-3x"></i> Loan History</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h3  class="w3-text-green text-center">{{Session::get('success')}} </h3>
                     <h2 class="text-center">Loan Form</h2> <h4 class="text-center">(Please fill all fields correctly)</h4>
                   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                   <div class="row text-center">
                <form method="POST" action="/ro/confirmdata" role="form">
              @csrf
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" required>

                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" required>
                    </div>

                </div>
                <div class="col-sm-12 col-md-3 col-lg-4">
                   <div class="form-group">
                    <label> Other Name</label>
                    <input type="text" class="form-control" name="othername" id="othername" required>
                    </div> 


                </div>

               
                   </div>
             <hr/>          

         <div class="row text-center">

              <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phoneno" id="phoneno" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>

                     <div class="form-group">
                    <label>BVN</label>
                    <input type="text" class="form-control" name="bvn" id="bvn" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div> 



          </div>

           
           <div class="col-sm-12 col-md-6 col-lg-6">
               
            <div class="form-group">
            <label> Home Address</label>
              <textarea class="form-control" name="address" rows="4" required></textarea>
            </div> 

           </div>                    



        </div>



  <hr/>
<div class="row text-center">
           
          <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="form-group">
                    <label>Business Type</label>
                    <input type="text" class="form-control" name="business" id="business" required>
                    </div>

                     <div class="form-group">
                    <label>Account Number</label>
                    <input type="text" class="form-control" name="accountnumber" id="accountnumber" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div> 



          </div>
              
        <div class="col-sm-12 col-md-6 col-lg-6">
               
            <div class="form-group">
            <label > Business Address</label>
              <textarea class="form-control" name="businessaddress" rows="4" required></textarea>
            </div> 

           </div>   


        </div>
  <hr/>
<div class="row text-center">
           
          <div class="col-sm-12 col-md-3 col-md-3">
                   
            <div class="form-group">
            <label> About Customer</label>
              <textarea class="form-control" name="aboutcustomer" rows="7" required></textarea>
            </div> 
          </div>
              
        <div class="col-sm-12 col-md-3 col-lg-3">
               
            <div class="form-group">
            <label> Business Background</label>
              <textarea class="form-control" name="businessbackground" rows="7" required></textarea>
            </div> 

           </div>   


        <div class="col-sm-12 col-md-3 col-lg-3">
               
            <div class="form-group">
            <label> Sales Report</label>
              <textarea class="form-control" name="salesreport" rows="7" required></textarea>
            </div> 

           </div>  


   <div class="col-sm-12 col-md-3 col-lg-3">
               
            <div class="form-group">
            <label> Financial Review </label>
              <textarea class="form-control" name="financialreview" rows="7" required></textarea>
            </div> 

           </div>  

        </div>


  <hr/>
           <div class="row text-center">
               <!--  <form method="POST" action="#" role="form">
              @csrf -->
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>Product Type</label>
                    <select class="form-control" id="product" name="product" required>
                    <option value="" disabled selected>Select</option>   
                    @foreach($prod as $prod)
                    <option value="{{$prod->name}}">{{ $prod->name }}</option>
                    @endforeach     
                    </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="requestamount" id="requestamount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                   <div class="form-group">
                    <label>Tenure</label>
                    <select class="form-control" name="tenure" id="tenure"  required>
                    <option value="" disabled selected>Select</option>   
                    <option value="1">1 Month</option>
                    <option value="2">2 Months</option>
                    <option value="3">3 Months</option>         
                    </select>
                    </div>

                </div>

               
                   </div>

  <hr/>
<div class="row text-center">
           
          <div class="col-sm-12 col-md-4 col-lg-4">
                   
            <div class="form-group">
            <label> Loan Purpose</label>
              <textarea class="form-control" name="purpose" rows="3" required></textarea>
            </div> 
          </div>
              
        <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
            <label> Repayment Source</label>
              <textarea class="form-control" name="repaymentsource" rows="3" required></textarea>
            </div> 
           

           </div>   


      <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
            <label> Account Officer Comment</label>
              <textarea class="form-control" name="rocomment" rows="3" required></textarea>
            </div> 
           

           </div>
     

        </div>

  <hr/>
  <div class="row text-center">
               <!--  <form method="POST" action="#" role="form">
              @csrf -->
               
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                    <label>Application Fee (NGN)</label>
                    <select class="form-control" name="applicationfee" id="applicationfee"  required>
                    <option value="" disabled selected>Select</option>   
                    <option value="1000">1000</option>
                    <option value="2000">2000</option>
                    <option value="3000">3000</option>          
                    <option value="4000">4000</option>          
                    <option value="5000">5000</option>          
                    </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="form-group">
                    <label>Management Fee (%)</label>
                    <select class="form-control" name="managementfee"  id="managementfee" required>
                    <option value="" disabled selected>Select</option>   
                    <option value="2">2.0</option>          
                    <option value="2.5">2.5</option>          
                    <option value="3">3.0</option>          
                    <option value="3.5">3.5</option>          
                    <option value="4">4.0</option>          
                    </select>
                </div>

                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="form-group">
                    <label>Penalty Fee (%)</label>
                    <select class="form-control" name="penaltyfee" id="penaltyfee"  required>
                    <option value="" disabled selected>Select</option>   
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>          
                    <option value="4">4</option>          
                    </select>
                </div>

                </div>


                <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="form-group">
                    <label>Insurance Fee (%)</label>
                    <select class="form-control" name="insurancefee" id="insurancefee" required>
                    <option value="" disabled selected>Select</option>   
                    <option value="0.5">0.5</option>
                    <option value="1.0">1.0</option>
                    <option value="1.5">1.5</option>          
                    <option value="2.0">2.0</option>          
                    </select>
                    </div>

                </div>

               
                   </div>



  <hr/>
<div class="row text-center">
           
          <div class="col-sm-12 col-md-6 col-lg-6">
                   
            <div class="form-group">
            <label>Collateral (1) </label>
              <textarea class="form-control" name="collateral1" rows="3" ></textarea>
            </div> 
          </div>
              
        <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="form-group">
            <label> Collateral (2) </label>
              <textarea class="form-control"  name="collateral2" rows="3" ></textarea>
            </div> 
           

           </div>   


     

        </div>



  <hr/>

         <div class="row text-center">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>1st Guarantor First Name</label>
                    <input type="text" class="form-control" name="1stgfirstname" id="1stgfirstname" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>1st Guarantor Last Name</label>
                    <input type="text" class="form-control" name="1stglastname" id="1stglastname" >
                    </div>

                </div>
                <div class="col-sm-12 col-md-3 col-lg-4">
                   <div class="form-group">
                    <label>1st Guarantor Other Name</label>
                    <input type="text" class="form-control" name="1stgothername" id="1stgothername" >
                    </div> 


                </div>

               
                   </div>



             <div class="row text-center">

              <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="form-group">
                    <label>1st Guarantor Phone Number</label>
                    <input type="text" class="form-control" name="1stgphone" id="1stgphone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
                    </div>

                     <div class="form-group">
                    <label>1st Guarantor BVN</label>
                    <input type="text" class="form-control" name="1stgbvn" id="1stgbvn" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div> 



          </div>

           
           <div class="col-sm-12 col-md-6 col-lg-6">
               
            <div class="form-group">
            <label>1st Guarantor Home Address</label>
              <textarea class="form-control" name="1stgaddress" rows="4" ></textarea>
            </div> 

           </div>                    



        </div>
<hr>





         <div class="row text-center">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>2nd Guarantor First Name</label>
                    <input type="text" class="form-control" name="2ndgfirstname" id="2ndgfirstname" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>2nd GuarantorLast Name</label>
                    <input type="text" class="form-control" name="2ndglastname" id="2ndglastname" >
                    </div>

                </div>
                <div class="col-sm-12 col-md-3 col-lg-4">
                   <div class="form-group">
                    <label>2nd Guarantor Other Name</label>
                    <input type="text" class="form-control" name="2ndgothername" id="2ndgothername" >
                    </div> 


                </div>

               
                   </div>



             <div class="row text-center">

              <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="form-group">
                    <label>2nd Guarantor Phone Number</label>
                    <input type="text" class="form-control" name="2ndgphone" id="2ndgphone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
                    </div>

                     <div class="form-group">
                    <label>2nd Guarantor BVN</label>
                    <input type="text" class="form-control" name="2ndgbvn" id="2ndgbvn" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div> 



          </div>

           
           <div class="col-sm-12 col-md-6 col-lg-6">
               
            <div class="form-group">
            <label>2nd Guarantor Home Address</label>
              <textarea class="form-control" name="2ndgaddress" rows="4" ></textarea>
            </div> 

           </div>                    



        </div>
<hr>




         <div class="row text-center">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>3rd Guarantor First Name</label>
                    <input type="text" class="form-control" name="3rdgfirstname" id="3rdgfirstname" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                    <label>3rd GuarantorLast Name</label>
                    <input type="text" class="form-control" name="3rdglastname" id="3rdglastname" >
                    </div>

                </div>
                <div class="col-sm-12 col-md-3 col-lg-4">
                   <div class="form-group">
                    <label>3rd Guarantor Other Name</label>
                    <input type="text" class="form-control" name="3rdgothername" id="3rdgothername" >
                    </div> 


                </div>

               
                   </div>

  
             <div class="row text-center">

              <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="form-group">
                    <label>3rd Guarantor Phone Number</label>
                    <input type="text" class="form-control" name="3rdgphone" id="3rdgphone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
                    </div>

                     <div class="form-group">
                    <label>3rd Guarantor BVN</label>
                    <input type="text" class="form-control" name="3rdgbvn" id="3rdgbvn" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div> 



          </div>

           
           <div class="col-sm-12 col-md-6 col-lg-6">
               
            <div class="form-group">
            <label>3rd Guarantor Home Address</label>
              <textarea class="form-control" name="3rdgaddress" rows="4" ></textarea>
            </div> 

           </div>                    



        </div>
<hr>

 <div class="row text-center">
               <!--  <form method="POST" action="#" role="form">
           -->
               
                <div class="col-sm-12 col-md-12 col-lg-12 ">
                    <div class="form-group">
                    <label>Bank Name</label>
                    <input type="text" class="form-control text-center" name="bankname" >
                    </div>
                </div> 

                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                    <label>Month</label>
                    <input type="text" class="form-control" name="1stmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    <label>Dr T/O (NGN)</label>
                    <input type="text" class="form-control"  name="1stdr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    <label> Cr T/O (NGN)</label>
                    <input type="text" class="form-control" name="1stcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    <label>Monthend Bal</label>
                    <input type="text" class="form-control" name="1stmonbal"  >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    <label>AMC (N)</label>
                    <input type="text" class="form-control" name="1stamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
            
                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    <label> Total E</label>
                    <input type="text" class="form-control" name="1sttot" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 
                </div>
                

                <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                    <label> Interest</label>
                    <input type="text" class="form-control" name="1stint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>



<!--- one end--->


                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="2ndmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="2nddr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="2ndcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="2ndmonbal" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                   
                    <input type="text" class="form-control" name="2ndamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                
                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="2ndtot" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 
                </div>

                <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                   
                    <input type="text" class="form-control" name="2ndint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
                    </div> 


                </div>


<!--  2 end-->



                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rdmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rddr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                   
                    <input type="text" class="form-control" name="3rdcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rdmonbal" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rdamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
               

                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rdtot" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


                <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="3rdint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>

<!--  3 end -->




                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                  
                    <input type="text" class="form-control" name="4thmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="4thdr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="4thcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                   
                    <input type="text" class="form-control" name="4thmonbal" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="4thamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
               

                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                   
                    <input type="text" class="form-control" name="4thtot" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


                    <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="4thint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>

<!-- --4 end -->




                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thdr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thmonbal" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                   
                    <input type="text" class="form-control" name="5thamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
               

                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thtot" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


                <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="5thint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>





<!--- 5 end-->
               

                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thmon" >
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thdr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thcr" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>


    <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thmonbal" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>
                </div>


                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="form-group">
                   
                    <input type="text" class="form-control" name="6thamc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div>

                </div>
               

                  <div class="col-sm-12 col-md-2 col-lg-2">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thtot"onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>



                <div class="col-sm-12 col-md-1 col-lg-1">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" name="6thint" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
                    </div> 


                </div>

                   </div>
                     

<br><br>

<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
  <div class="col-sm-12 col-md-4 col-lg-4  text-center">

    <button type="submit" class="btn btn-lg btn-flat w3-text-white"  style="background: red;"> Continue</button>
                               
                                   
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
</div>
                    </form>
                 <!-- /. ROW  -->
                <hr />                
               	






@endsection