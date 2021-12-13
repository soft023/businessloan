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
                        <a class="active-menu" href="/ca/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>
          
                    
                    <li>
                        <a  href="/ca/approvedloans"><i class="fa fa-qrcode fa-3x"></i>Approved Loans</a>
                    </li>         
                   
                  <li>
                        <a   href="/ca/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
             <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h4 class="text-center"><b></b></h4>
                   
                    </div>
                </div>              
                 <!-- /. ROW  -->
               
                  
                
                


<h4><b class="w3-red">Bank Account Info For {{session('months')}}Month(s) </b><br></h4>



  

 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                           <th><b>Months</b></th>
                                          @for ($i=1; $i<=session('months'); $i++)
                                            <th>Month{{$i}}</th>
                                            @endfor
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                              
                               
                                <tr class="">
                                  
                                  @foreach($acctinfo as $acct)
                                  <td><b>Sale Income</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                 
                                            <td>{{$acct['credit'.$i]}}</td>
                                    
                                            @endfor
                                    
                                          
                                           
                                @endforeach 
                              </tr>







                                <tr class="">
                                  
                                  @foreach($acctinfo as $acct)
                                  <td><b>Cost Of Goods Sold</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                 
                                            <td>{{round($acct['credit'.$i] * ( 1 - session('margin')),2)}}</td>
                                    
                                            @endfor
                                    
                                          
                                           
                                @endforeach 
                              </tr>




                              <tr class="">
                                  
                                  @foreach($acctinfo as $acct)
                                  <td><b>Gross Profit</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                 
                                            <td>{{round($acct['credit'.$i] - $acct['credit'.$i] * ( 1 - session('margin')),2)}}</td>
                                    
                                            @endfor                                          
                                @endforeach 
                              </tr>



                         <tr class=""> 
                                  <td></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td></td>
                                            @endfor   
                              </tr>

                              

                              

                           <tr class=""> 
                                  <td></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td></td>
                                            @endfor   
                              </tr>


                               <tr class=""> 
                                  <td>Expenses</td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td></td>
                                            @endfor   
                              </tr>




                                <tr class="">
                                  <td><b>Salaries</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['salaries'.$i]}}</td>
                                            @endfor  
                                        </tr>





                                 <tr class="">
                                  <td><b>Rent</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['rent'.$i]}}</td>
                                            @endfor  
                                        </tr>


                          
                                    
                                     <tr class="">
                                  <td><b>Utilities</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['utilities'.$i]}}</td>
                                            @endfor  
                                        </tr>
                                      





                                  <tr class="">
                                  <td><b>Transportation</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['transportation'.$i]}}</td>
                                            @endfor  
                                        </tr>





                                     <tr class="">
                                  <td><b>Service Charge</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['servicecharge'.$i]}}</td>
                                            @endfor  
                                        </tr>






                                   <tr class="">
                                  <td><b>Food at Work</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['food'.$i]}}</td>
                                            @endfor  
                                        </tr>




                                    

                                     <tr class="">
                                  <td><b>Loan Repayment</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['loanrepayment'.$i]}}</td>
                                            @endfor  
                                        </tr>






                                <tr class="">
                                  <td><b>Others</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['others'.$i]}}</td>
                                            @endfor  
                                        </tr>








                                <tr class="">
                                  <td><b>Total Expenses</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{$data['others'.$i] +  $data['loanrepayment'.$i] + $data['food'.$i] + $data['servicecharge'.$i] + $data['transportation'.$i] + $data['utilities'.$i] +  $data['rent'.$i] + $data['salaries'.$i]  }}</td>
                                            @endfor  
                                        </tr>







                                     <tr class="">
                                  <td><b>Net Business Income</b></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td>{{ round(($acct['credit'.$i] - $acct['credit'.$i] * ( 1 - session('margin'))) -($data['others'.$i] +  $data['loanrepayment'.$i] + $data['food'.$i] + $data['servicecharge'.$i] + $data['transportation'.$i] + $data['utilities'.$i] +  $data['rent'.$i] + $data['salaries'.$i] ) ,2) }}</td>
                                            @endfor  
                                        </tr>






                              <tr class=""> 
                                  <td></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td></td>
                                            @endfor   
                              </tr>
                                 <tr class=""> 
                                  <td></td>
                                   @for ($i=1; $i<=session('months'); $i++)
                                            <td></td>
                                            @endfor   
                              </tr>














                                <tr class="">
                                  <td><b> Average Business Income</b></td>
                                   
                                            <td>
                                              <?php $tot = 0; ?>
                                              @for ($i=1; $i<=session('months'); $i++)
                                               <?php

                                                $tot += ($acct['credit'.$i] - $acct['credit'.$i] * ( 1 - session('margin'))) - ($data['others'.$i] +  $data['loanrepayment'.$i] + $data['food'.$i] + $data['servicecharge'.$i] + $data['transportation'.$i] + $data['utilities'.$i] +  $data['rent'.$i] + $data['salaries'.$i]) ?>
                                                 @endfor  
                                                  {{ round($tot / session('months'),2)}}
                                               
                                                  
                                            </td>
                                           
                                        </tr>



                                <tr class="">
                                  <td><b> Maximum Loan Amount Possible </b></td>
                                   
                                            <td>
                                              <?php $tot = 0; ?>
                                              @for ($i=1; $i<=session('months'); $i++)
                                               <?php

                                                $tot += ($acct['credit'.$i] - $acct['credit'.$i] * ( 1 - session('margin'))) - ($data['others'.$i] +  $data['loanrepayment'.$i] + $data['food'.$i] + $data['servicecharge'.$i] + $data['transportation'.$i] + $data['utilities'.$i] +  $data['rent'.$i] + $data['salaries'.$i]) ?>
                                                 @endfor  
                                                  {{round((($tot / session('months')) * 3 ) / (1 + 0.05),2)}}
                                               
                                                  
                                            </td>
                                           
                                        </tr>



                             <tr class="">
                                  <td><b>Loan Repayment Per Month </b></td>
                                   
                                            <td>
                                              <?php $tot = 0; ?>
                                              @for ($i=1; $i<=session('months'); $i++)
                                               <?php

                                                $tot += ($acct['credit'.$i] - $acct['credit'.$i] * ( 1 - session('margin'))) - ($data['others'.$i] +  $data['loanrepayment'.$i] + $data['food'.$i] + $data['servicecharge'.$i] + $data['transportation'.$i] + $data['utilities'.$i] +  $data['rent'.$i] + $data['salaries'.$i]) ?>
                                                 @endfor  
                                                  {{round(((($tot / session('months')) * 3 ) / (1 + 0.05))/3,2)}}
                                               
                                                  
                                            </td>
                                           
                                        </tr>




                                    </tbody>
                                </table>










                 <!-- /. ROW  -->
                <hr />                
                




                






@endsection