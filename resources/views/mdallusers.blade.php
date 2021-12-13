@extends ('layouts.mdmain')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                   
                </li>
                
                    
                    <li><br>
                        <a   href="/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="/md/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
                    
                                       
                   
                  <li>
                        <a  href="/md/allloan"><i class="fa fa-square-o fa-3x"></i>All Loans</a>
                    </li> 


                      <li>
                        <a class="active-menu" href="/allusers"><i class="fa fa-square-o fa-3x"></i>All Users</a>
                    </li> 

                     <li>
                        <a  href="/allroles"><i class="fa fa-square-o fa-3x"></i>All Roles</a>
                    </li> 
                     <li>
                        <a  href="/allunits"><i class="fa fa-square-o fa-3x"></i>All Units</a>
                    </li> 









                </ul>
               
            </div>
            
        </nav>    
           <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Users</h2>   
                       
                    </div>
  <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Registered User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Staff Id</th>
                                            <th>Role</th>
                                            <th>Unit</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   $i = 1; ?>
                                    @foreach($users as $user)


                                        <tr class="odd gradeX">
                                <td>{{ $i }}</td>
                                <td>{{$user['staffname']}}</td>
                                <td>{{$user['staffid']}}</td>
                                 <td>{{$user['role']}}</td>
                                <td>{{$user['unit']}}</td>
                               
                              
                                        </tr>

                                     <?php   $i++; ?>
          
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->













                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                 <!-- /. ROW  -->
                <hr />                
                






@endsection