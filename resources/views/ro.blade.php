@extends ('layouts.main')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
              
				</li>
				
					
                    <li>
                        <a class="active-menu"  href="/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                    <a  href="/ro/loanform1"><i class="fa fa-qrcode fa-3x"></i>Initiate Loan</a>
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
                     <h2>Relationship Officer</h2>   
                        <h5>Meeting Needs... </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                   <div class="row">
             
             </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{session('numcons')}}</p>
                    <p class="text-muted">Rejected Loans</p>
                </div>
             </div>
             </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{session('numback')}}</p>
                    <p class="text-muted">Number of Loans</p>
                </div>
             </div>
             </div>
            </div>
                 <!-- /. ROW  -->
                <hr />                
               	






@endsection