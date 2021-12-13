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
                        <a class="active-menu"   href="/ca/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
          
                       
                    <li>
                        <a  href="/ca/approvedloans"><i class="fa fa-qrcode fa-3x"></i>Approved Loans</a>
                    </li>      
                   
                  <li>
                        <a  href="/ca/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12 text-center">
                     <h3 class="w3-text-red"><b>Credit Profitability Analysis</b></h3>  
                     </div> 
                   

          <br><br><br><br>

            <div class="col-sm-12 col-md-6 col-md-6">
<form class="form" method="POST" action="{{ route('profitexp') }}"> 
@csrf
<input type="hidden" name="cid" id= "cid"  value="{{session('cid')}}">
                 <div class="form-group">
                    <label>Estimated Selling Price</label>
                    <input type="text" class="form-control" name="sellingprice" id="sellingprice" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div> 
           </div>
           <div class="col-sm-12 col-md-6 col-md-6">
             <label>Estimated Cost Price</label>
                    <input type="text" class="form-control" name="costprice" id="costprice" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div><br><br> </div>
                    <hr>

               <div class="col-sm-12 col-md-12 col-md-12 text-center">
                      <h4><b>Expenses</b></h4>
                    </div><br><br><br>
 
             @for($i= 1; $i<= session('months'); $i++)                    
                 <h3>Month {{$i}}</h3>                     
                

          

        


       

           <div class="row">

                    <div class="col-sm-12 col-md-3 col-lg-3">
                    <label>Salaries</label>
                    <input type="text" class="form-control" name="salaries{{$i}}" id="salaries" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>
                    

                    <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Rent</label>
                    <input type="text" class="form-control" name="rent{{$i}}" id="rent{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>
                      
                  <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Utilities(PHCN Bill etc.)</label>
                    <input type="text" class="form-control" name="utilities{{$i}}" id="utilities{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>


                    <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Transportation</label>
                    <input type="text" class="form-control" name="transportation{{$i}}" id="transportation{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div><br>

                </div>




        
        <div class="row">
                 <div class="col-sm-12 col-md-3 col-lg-3">
                    <label>Services Charge</label>
                    <input type="text" class="form-control" name="servicecharge{{$i}}" id="servicecharge{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>
                    

                    <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Food at work place</label>
                    <input type="text" class="form-control" name="food{{$i}}" id="food{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>
                      
                  <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Loan Repayment</label>
                    <input type="text" class="form-control" name="loanrepayment{{$i}}" id="loanrepayment{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>


                    <div class="col-sm-12 col-md-3 col-lg-3">
                     <label>Others</label>
                    <input type="text" class="form-control" name="others{{$i}}" id="others{{$i}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>













                    
</div>
<hr><br>
@endfor



<div class="col-sm-12 col-md-12 col-md-12 text-center">
                     <a class="btn btn-lg btn-danger " href="{{ URL::previous() }}" ><i class=""></i><b>Back</b></a>
                     <button type="submit" class="btn btn-lg btn-flat w3-text-white"  style="background: green;">Next</button>
                    </div><br> 


                    

           
</form>  
           </div>


         </div>  
                   



        


@endsection