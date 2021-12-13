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
                        <a  class="active-menu" href="/fincon/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
					
					                   
                   
                  <li>
                        <a  href="/fincon/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h4 class="w3-text-red">All Pending Request</h4>   
                  
                    </div>
                </div>    


                  <div class="panel panel-default">
                        <div class="panel-heading">
                            All Requested Loans Information and Update<br>

                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer Name</th>
                                            <th>Account Number</th>
                                            <th>Requested Amount</th>
                                            <th>Product</th>
                                            <th>Officer</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                                    <?php   $i = 1; ?>
                                    @foreach($customer as $user)

                              



                               
                                <tr class="">
                               
                                  
                                            <td>{{$i}}</td>
                                            <th>{{$user['firstname']}} {{$user['lastname']}}</th>
                                            <th>{{$user['accountnumber']}}</th>
                                            <th>{{$user['requestamount']}}</th>
                                            <th>{{$user['product']}}</th>
                                            <th>{{$user['officer']}}</th>
                                           <th>{{$user['created_at']}} </th>
                                            <td><a class="btn btn-warning " href="/fincon/updaterequest/{{ $user['id']}}" ><i class="fa fa-edit"></i><b>Manage</b></a></td>
                                            

                           
                               
                                
                              
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