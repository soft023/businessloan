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
                        <a class="active-menu"   href="/uh/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
          
                             
                   
                  <li>
                        <a  href="/uh/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12 text-center">
                     <h3 class="w3-text-red">Approve Loan Request</h3>  
                     </div> 
                          <div class="row text-center">
<form class="form" method="POST" action="{{ route('uhapproverequest') }}"> 
@csrf


<input type="hidden" name="cid" id= "cid"  value="{{$cid[0]}}">


          <br><br><br><br>
          <div class="col-sm-12 col-md-3 col-lg-3"></div>
              <div class="col-sm-12 col-md-6 col-md-6">

                    <div class="form-group">
                    <label>Suggest Amount (NGN)</label>
                    <input type="text" class="form-control text-center" name="amount" id="amount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    </div>
          <br>
           <div class="form-group">
            <label>Comment </label>
              <textarea class="form-control" name="comment" rows="4" placeholder="Kindly write your reasons" required> </textarea>
            </div> <br><br>


            <div class="form-group">
             
 <a class="btn btn-lg btn-primary " href="{{ URL::previous() }}" ><i class=""></i><b>Back</b></a> 
     <button type="submit" class="btn btn-lg btn-flat w3-text-white"  style="background: green;"> Submit</button>

            </form>

            </div>



          </div>

           
           <div class="col-sm-12 col-md-3 col-lg-3"></div>                    



        </div>
                    </div>
                </div>   



                 <!-- /. ROW  -->
                  <hr />
             
                

</div>




@endsection