    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cam Login</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
         <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
         <!-- GOOGLE FONTS-->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link rel="stylesheet" type="text/css" href="css/w3.css">
    </head>
    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2>User Login Form</h2><br>
                   
                    
                </div>
            </div>
             <div class="row ">
                   
                      <div class="col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-3 col-xs-12 ">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center w3-purple">
                            <strong class="w3-text-white text-center"> Enter Details To Login </strong>  
                                </div>
                                <div class="panel-body text-center">
                             <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                           <br />
                                         <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                             <input id="staffid" type="text" class="form-control @error('staffid') is-invalid @enderror" name="staffid" value="{{ old('staffid') }}" required autocomplete="staffid" placeholder="Staff ID" autofocus>

                                    @error('staffid')
                                        <span class="invalid-feedback w3-text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div><br>
                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>
                         <div class="form-group">
                         <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label w3-margin-left" for="remember">
                                                          {{ __('Remember Me') }}
                                                     </label>

                                                <span class="pull-right">
                                      
                                                </span>
                                            </div>
                                         <br>
                                         <button type="submit" class="btn btn-lg w3-text-white" style="background: purple;">
                                        {{ __('Login Now') }}
                                    </button>
                                         
                                        @if (Route::has('password.request'))
                                         <a class="btn btn-link w3-text-red" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                         @endif


                                        <hr />
                                           <h6 class="text-center"> For registration please contact IT </h6> <br>
                                        <a href="/"><span class="input-group-addon w3-purple"><i class="fa fa-home"  ></i></span></a> 

                                        </form>
                                        <br><br>
                                </div>
                               
                            </div>
                        </div>
                    
                    
            </div>
        </div>


         <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
          <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
          <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
       
    </body>
    </html>











