@extends ('layouts.main')
@section('maincontent')
 </nav>   
       <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                </li>
                
                    
                    <li>
                        <a  href="/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="/register"><i class="fa fa-desktop fa-3x"></i> Register User</a>
                    </li>
                    <li>
                        <a  class="active-menu"  href="/manageruser"><i class="fa fa-qrcode fa-3x"></i> Manage Users</a>
                    </li>
                    
                    <li>
                        <a  href="#"><i class="fa fa-qrcode fa-3x"></i>All Pending</a>
                    </li>

                  <li>
                        <a  href="#"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li>                    
                   
                 
                </ul>
               
            </div>
            
        </nav>  
    
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Users</h2> 
                     <h4  class="w3-text-green">{{Session::get('success')}} </h4>  
                       
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
                                            <th>Unit</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                                    <?php   $i = 1; ?>
                                    @foreach($users as $user)

                              



                               
                                <tr class="">
                                <form class="form" method="POST" action="{{ route('deletestaff') }}"> 
                                 <input type="hidden" name="sid" id= "sid"  value="{{ $user['id']}}">
                                 @csrf

                                <td>{{$user['id']}}</td>
                                <td>{{$user['staffname']}}</td>
                                <td>{{$user['staffid']}}</td>
                                <td>{{$user['unit']}}</td>
                                <td>{{$user['role']}}</td>
                                <td><button type="submit" class="btn btn-md btn-success">Delete</button></td>
                                </form> 
                                        </tr>
                                        

                                    
          
                                     @endforeach
                                      
                                    </tbody>
                                </table>
                                 {{$users->links()}}
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