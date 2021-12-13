@extends ('layouts.uh')
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
                        <a   href="/ca/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
					
                    <li>
                        <a  href="/ca/approvedloans"><i class="fa fa-qrcode fa-3x"></i>Approved Loans</a>
                    </li>
					                   
                   
                  <li>
                        <a  class="active-menu" href="/ca/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Loan Request</h2>   
                        
                    </div>
                </div>    


                  <div class="panel panel-default">
                        <div class="panel-heading">
                            All Requested Loans Updated Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer Name</th>
                                            <th>Account Number</th>
                                            <th>Approved Amount</th>
                                            <th>Status</th>
                                            <th>Officer</th>
                                            <th>Updated Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                                    <?php   $i = 1; ?>
                                    @foreach($customer as $user)

                              



                               
                                <tr class="">
                                
<?php 
 $t = $user['status'];
 $st = '';
switch ($t) {
  case '1':
    $st = "Unit Head";
    break;
  case '2':
    $st = "Credit";
    break;
  case '3':
    $st = "Control";
    break;
  case '4':
    $st = "Fincon";
    break;

  case '5':
    $st = "MD";
    break;

  case '6':
    $st = "Rejected";
    break;
    
  default:
   $st = "Approved";
    break;
}

 ?>  
                               
                                  
                                            <td>{{$i}}</td>
                                            <th>{{$user['firstname']}} {{$user['lastname']}}</th>
                                            <th>{{$user['accountnumber']}}</th>
                                            <th>{{$user['approveamount']}}</th>
                                            <th>{{$st}}</th>
                                            <th>{{$user['officer']}}</th>
                                           <th>{{$user['updated_at']}} </th>
                                            <td><a class="btn btn-primary " href="/ca/viewloan/{{ $user['id']}}" ><i class="fa fa-edit"></i><b>View More</b></a></td>
                                            

                           
                               
                                
                                </form> 
                                        </tr>
                                        
                                  <?php   $i++; ?>
                                    
          
                                     @endforeach
                                      
                                    </tbody>
                                </table>
                             {{$customer->links()}}
                            </div>
                                      
                 <!-- /. ROW  -->
                  <hr />
             
               	






@endsection