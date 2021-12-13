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
                        <a   href="/dashboard"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="/ro/loanform1"><i class="fa fa-qrcode fa-3x"></i>Initiate Loan</a>
                    </li>
					

                  <li>
                        <a  class="active-menu" href="/ro/rejectedloan"><i class="fa fa-square-o fa-3x"></i>Rejected Loans</a>
                    </li> 
					                   
                   
                  <li  >
                        <a   href="/ro/loanhistory"><i class="fa fa-square-o fa-3x"></i>Loan History</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Rejected Loan Request History</h2>  
                     <h3  class="w3-text-green text-center">{{Session::get('success')}} </h3> 
                        
                    </div>
                </div>  
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            All Rejected Loans Information 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Account Number</th>
                                           
                                            <th>Rejected By</th>
                                            <th>Reason</th>
                                            
                                            <th>Rejected Time</th>
                                         {{--    <th>Edit</th> --}}
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                                    <?php   $i = 1; ?>
                                    @foreach($customer as $user)

                              



                               
                                <tr class="">
                                <form class="form" method="POST" action="{{ route('deletecustomer') }}"> 
                                 <input type="hidden" name="sid" id= "sid"  value="{{ $user['id']}}">
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

  case '6':
    $st = "Rejected";
    break;
    
  default:
   $st = "MD";
    break;
}

 ?>  

                                 @csrf
                                  
                                            <td>{{$i}}</td>
                                            <th>{{$user['firstname']}} {{$user['lastname']}}</th>
                                            <th>{{$user['accountnumber']}}</th>
                                            
                                            <th>{{$user['rejectedby']}}</th>
                                            <th>{{$user['rejectedreason']}}</th>
                                                                   
                                            <th>{{$user['updated_at']}} </th>
                                            {{-- <td><a class="btn btn-success " href="/editcustomer/{{ $user['id']}}" ><i class="fa fa-edit"></i><b>Edit</b></a></td> --}}
                                            <th><button type="submit" class="btn btn-md btn-danger">Delete</button></th>

                           
                               
                                
                                </form> 
                                        </tr>
                                        
                                  <?php   $i++; ?>
                                    
          
                                     @endforeach
                                      
                                    </tbody>
                                </table>
                             {{$customer->links()}}
                            </div>
                            
                        </div>
                    </div>            
                 <!-- /. ROW  -->
                 
                 <!-- /. ROW  -->
                <hr />                
               	






@endsection