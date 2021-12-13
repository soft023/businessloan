@extends ('layouts.main')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
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
                        <a class="active-menu" href="/register"><i class="fa fa-desktop fa-3x"></i> Register User</a>
                    </li>
                    <li>
                        <a  href="/manageruser"><i class="fa fa-qrcode fa-3x"></i> Manage Users</a>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura lt; font-style: normal;" >
            <div id="page-inner">
                          
          












            <div class="row text-center ">
                <div class="col-md-12">
                    <h2 class="text-center">User Registration Form</h2>
                   
                     <h4  class="w3-text-green">{{Session::get('success')}} </h4>
                </div>
            </div>
             <div class="row ">
                 
                   <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"></div>
                      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center w3-purple">
                            <strong class="w3-text-white"> Enter User Information </strong>  
                                </div>
                                <div class="panel-body text-center">
                                   

                              <form method="POST" action="{{ route('register') }}">
                                  @csrf


                                                                    

                                           <br />
                             <div class="form-group input-group">
                             <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                             <input id="staffname" type="text" class="form-control @error('staffname') is-invalid @enderror" name="staffname" value="{{ old('staffname') }}" required autocomplete="staffname" placeholder="Staff Name" autofocus required>
                                    @error('staffname')
                                        <span class="invalid-feedback w3-text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>




                                   <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                             <input id="staffid" type="text" class="form-control @error('staffid') is-invalid @enderror" name="staffid" value="{{ old('staffid') }}" required autocomplete="staffid" placeholder="Staff ID" required>

                                    @error('staffid')
                                        <span class="invalid-feedback w3-text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>





                                   <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-at"  ></i></span>
             <input id="email" type="text" class="form-control @error('staffemail') is-invalid @enderror" name="staffemail" value="{{ old('staffemail') }}" required autocomplete="staffemail" placeholder="Staff Email" required>

                                    @error('staffemail')
                                        <span class="invalid-feedback w3-text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>




                            

                        <div class="form-group input-group">
                      <span class="input-group-addon"> <i class="fa fa-bank"  > </i>  </span>
                         <select class="form-control" id="unit" name="unit" required>
                         <option value="" disabled selected>Please User Unit</option>        
                          @foreach($units as $unit)
                         <option value="{{$unit->name}}">{{ $unit->name }}</option>
                         @endforeach
                         </select>
                        </div>








                        <div class="form-group input-group">
                      <span class="input-group-addon"> <i class="fa fa-bars"  > </i>  </span>
                         <select class="form-control" id="role" name="role" required>
                         <option value="" disabled selected>Please User Role</option>        
                          @foreach($roles as $role)
                         <option value="{{$role->name}}">{{ $role->name }}</option>
                         @endforeach
                         </select>
                        </div>





                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>

                                    @error('password')
                                        <span class="invalid-feedback w3-text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>





                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                            </div>



                                         <br>
                                         <button type="submit" class="btn btn-flat w3-text-white" style="background: purple;">
                                        {{ __('Register') }}
                                    </button>
                                       

                        </form>
                                        <br><br>
                                </div>
                               
                            </div>
                        </div>
                    
                    
            </div>
        </div>





@endsection