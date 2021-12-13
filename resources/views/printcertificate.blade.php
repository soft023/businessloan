  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Offer Letter</title>
<link href="../../assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="../../assets/css/font-awesome.css" rel="stylesheet" />
<!-- MORRIS CHART STYLES-->
<link href="../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="../../assets/css/custom.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

<div class="container-fluid">


<!-- /. NAV TOP  -->
  
 <div id="" style="font-family: futura light; font-style: normal;" >
<div id="page-inner">
    <div class="row">
@foreach($customer as $data)
        <div class="col-md-12" >
       <b><img class="rounded float-left" src="../../img/lg.jpeg"  style="float-left;" width="100px" alt=""><span style="margin-left: 150px">LOAN OFFER LETTER</span></b>
        </div>

    </div>              

      
    





<div class="row">

<div class="col-md-12">
<h5><b>
{{ $data['firstname']." ". $data['othername']." ". $data['lastname']  }} </b> <span style="margin-left: 350px">{{ $data['updated_at']}}</span><br>
{{ $data['address']}}
</h5>

<h4><b><u>RE: APPLICATION FOR A CREDIT FACILITY</u></b></h4>
<h5>We are pleased to offer you a term loan facility subject to the following terms and conditions:</h5>
<h5>
<b>1. Principal loan Amount : </b>  The sum of N{{ $data['approveamount']}} only has been approved as principal loan amount.<br>
<b>2. Purpose: </b>  The facility is offered for the enhancement of your {{ $data['business']}} <br>
<b>3. Tenor: </b>   {{ $data['tenure'] * 30}}  days<br>
<b>4. Start Date: </b>   {{ $data['updated_at']}} <br>
<b>5. Expiry Date: </b>   {{ $data['updated_at']->addDays($data['tenure'] * 30)}} <br>
<b>6. Pricing: </b>   <br>
   <span style="margin-left: 15px;">i. Management fee of {{ $data['managementfee']}}%  flat (payable upfront)</span> <br>
   <span style="margin-left: 15px;">ii. Application fee of N{{ $data['applicationfee']}} (payable upfront)</span> <br>
   <span style="margin-left: 15px;">iii. Insurance fee of {{ $data['insurancefee']}}%  flat (payable upfront)</span> <br>
   <span style="margin-left: 15px;">iv. Penalty fee of {{ $data['penaltyfee']}}%  flat (payable upfront)</span> <br>
   <span style="margin-left: 15px;">v. Interest rate {{ $data['rate']}}. The interest rate is subject to change at the bank’s<br></span><span style="margin-left: 30px;">  discretion and as may be determined by money market realities.</span> <br>

<b>7. Security: </b>   <br>
<span style="margin-left: 15px;">i. Three (3) signed and undated cheque of the customer.</span> <br>
<span style="margin-left: 15px;">ii. One (1)  signed and Undated cheque of guarantors. </span> <br>
<span style="margin-left: 15px;">iii. Stock Valuation/Hypothecation.</span> <br>
<span style="margin-left: 15px;">iv. 10% mandatory savings.</span> <br>
<span style="margin-left: 15px;">v.  Provision of adequate collateral as may be requested by the Bank.</span><br>
<span style="margin-left: 15px;">vi. Where any of the security is provided by a third party, you shall procure the execution </span><br> <span style="margin-left: 30px;"> and delivery of the documents to the bank.<br></span><br><br>
<span style="">Any security taken by the Bank will be held until the full repayment of all outstanding loan amount,<br> interest and any incidental cost incurred in the recovery of the loan amount.</span> <br><br>



<b>8.  Right Of Set Off </b><br>
 
<span style="margin-left: 15px;">i.  By signing this offer letter/loan agreement, and by drawing on the loan, I /We covenant to repay</span><br><span style="margin-left: 30px;"> the loan as at when due. In the event that  I/ We fail to repay the loan as agreed, and the loan becomes </span><br><span style="margin-left: 30px;">  delinquent, the bank shall have the right to report the delinquent loan to the CBN through the<b> Credit Risk</span><br><span style="margin-left: 30px;">  Management System (CRMS)</b> or by any other means and request the CBN to exercise its regulatory </span><br><span style="margin-left: 30px;"> powers to direct all banks and other financial institutions under its regulatory purview to set-off my/our</span><br><span style="margin-left: 30px;"> indebtedness to you from any in any bank account and from any financial assets that may be holding to </span><br><span style="margin-left: 30px;">my/our benefit.</span> <br>
<span style="margin-left: 15px;">ii.  I/ We covenant and warrant that the bank shall have the power to set-off my/our indebtedness under </span><br><span style="margin-left: 30px;">this loan agreement from all such monies and funds standing to my/our  credit/benefit in any or all </span><br><span style="margin-left: 30px;">such accounts or from any other financial assets belonging to me/us and in the custody of any bank. </span> <br>
<span style="margin-left: 15px;">iii.  I/We hereby waive any right of confidentiality whether arising under common law or statute or in any</span><br><span style="margin-left: 30px;"> manner whatsoever and irrevocably agree that I shall not argue to the contrary before any court of law,</span><br><span style="margin-left: 30px;"> tribunal or any administrative authority or anybody acting in judicial or quasi-judicial capacity.</span> <br>






<b>9.  Pre-conditions to disbursement: </b> The facility will be made available by BGMFB <br>
 to you subject to the following:  <br>
<span style="margin-left: 15px;">i.  Completion of all legal documentation.</span> <br>
<span style="margin-left: 15px;">ii.  Acceptance of all the terms and conditions on this offer letter by signing or sealing the acceptance </span><br><span style="margin-left: 30px;">column below. </span> <br>
<span style="margin-left: 15px;">iii.  Receipt of duly signed stock hypothecation agreement</span> <br>
<span style="margin-left: 15px;">iv.  Delivery of all relevant certificates and/or other documentary evidence of title or ownership of collateral as </span><br><span style="margin-left: 30px;"> may be required by the Bank.</span> <br>
<span style="margin-left: 15px;">v.  Execution of any form(s) or document(s) as theBank may require for the assignment, </span><br><span style="margin-left: 30px;">pledge or charge of any securities for the fulfilment of  the Borrower's obligations hereof. </span><br>
<span style="margin-left: 15px;">vi.  Duly executed asset debenture </span><br> 
<span style="margin-left: 15px;">vi.  vii.  Satisfactory credit search report. </span><br> 



<b>10. Repayment: </b>   Repayment shall be made on or before the date and manner set out in the repayment schedule </span><br><span style="">as attached.<br>

<b>11. Penalty: </b>  In the event of default upon the expiration of the loan or on demand by the bank, <br>you shall repay all outstanding amount in full failing which you will be charged a daily default fee of 4% <br>in addition to the monthly interest rate or in accordance with the bank’s default rate at the time of default.<br>


<b>12. Recovery/Security realization: </b>   The Bank shall immediately upon demand or upon the expiration of the loan,<br> commence recovery actions and enforce all legal remedies against the borrower. All costs, charges or expenses <br>incurred by the Bank, directly or indirectl in the process of recovering or attempting to recover any outstanding <br>amount or  in the process of perfecting, discharging and /or enforcing any pledged securities for this facility shall<br> be borne by you. The bank will advise you in writing of such charges, costs or expenses for immediate settlement.<br>



<b>13.  Acceleration of Payment in the event of default:</b>Without prejudice to the Bank’s right to enforce a <br> “Bullet Repayment” of outstanding loan amount at any time, any or all the following events shall necessitate an <br>accelerated repayment as due for immediate liquidation:  <br>
   <span style="margin-left: 15px;">i.  The Bank reserves the right to recall the facility if is found to have been diverted for other purposes other than </span><br><span style="margin-left: 30px;">the purpose for which it was granted.</span> <br>
   <span style="margin-left: 15px;">ii. If you defaults in the performance or observation of the terms contained in this offer letter and such breach</span><br><span style="margin-left: 30px;"> continues without remedy after seven (7) days’ notice to you.</span> <br>
   <span style="margin-left: 15px;">iii.  If you cease or threaten to cease to carry out business</span> <br>
   <span style="margin-left: 15px;">iv. If an order is issued or an effective resolution is passed or a winding up petition is levied upon you.</span> <br>
   <span style="margin-left: 15px;">v. Interest rate {{ $data['rate']}}v. If there I any material change in your character which the bank considers </span><br><span style="margin-left: 30px;">significantly adverse to its interest as a lender.<br>
   </span><span style="margin-left: 30px;">  discretion and as may be determined by money market realities.</span> <br>



<b>14.Indemnity: </b>  You hereby agree to indemnify the Bank against all losses that may be incurred as a result of any<br> irregularity, misconduct or wilful omission in any document submitted to Regent by you or even after the facility<br> has been fully liquidated.<br>
</h5>



<b>15. Other Conditions: </b>   <br>
   <span style="margin-left: 15px;">i.  There must be a 150% turnover/covenant monthly of sales proceed monthly into your BGMFB account.<br> </span><span style="margin-left: 30px;"> In the event of default, a monthly charge of 0.5% on turnover covenant shall be applied   </span> <br>
   <span style="margin-left: 15px;">ii. You shall not obtain any loan from any other source during the tenure of this facility.</span> <br>
   <span style="margin-left: 15px;">iii.  Requests for extension of tenure shall be at the discretion of the Bank subject to additional renewal <br> </span><span style="margin-left: 30px;">fee of 5% flat for the new approved tenor.</span> <br>
   <span style="margin-left: 15px;">iv. The bank will send SMS notification reminders to you for repayments and recovery at the cost of <br> </span><span style="margin-left: 30px;">N 10 per SMS  which shall be borne by you.</span> <br>

    <span style="margin-left: 15px;">v. The bank shall not be under any obligation to disburse the facility to you and no cause of action shall arise <br> </span><span style="margin-left: 30px;"> as a result of the bank’s inability to disburse the facility as stated herein. </span> <br>
 <span style="margin-left: 15px;">vi. The bank shall not be liable for any failure to perform its obligations herein resulting directly or indirectly <br> </span><span style="margin-left: 30px;">from the action  or inaction of any government or local authority or any strike, boycott, blockade, act of god,<br> </span><span style="margin-left: 30px;">  civil disturbance or any other act which the bank considers beyond its control. </span> <br>
  <span style="margin-left: 15px;">vii. Each provision of this letter is servable, the one from the other and if at any time any provision is or <br> </span><span style="margin-left: 30px;"> becomes or is found to be illegal, invalid, defective or unenforceable for any reason by any competent court,<br> </span><span style="margin-left: 30px;"> the remaining provisions shall  continue to be binding.</span> <br>
   <span style="margin-left: 15px;">viii. Without prejudice to the foregoing, the Bank reserves the right at its discretionto vary, alter or amend any <br> </span><span style="margin-left: 30px;">of the terms and  conditions of the loan whenever the need arises.</span> <br><br>

   If the terms and conditions of this offer are acceptable to you, kindly confirm your acceptance by signing and <br>returning a copy to the Bank within seven (7) days failing of which the offer shall lapse unless otherwise <br>determined by us.<br><br><br>Yours faithfully,<br>
   <b>For: Balogun Gambari Microfinance Bank Limited</b><br><br><br><br><br>


<h5><b>-------------------------------- <span style="margin-left:310px">--------------------------------</span></b></h5><br>
<h5><b>Sheriffat Adeshina <span style="margin-left:347px"> Sheriffdeen Rabiu</span></b></h5><br>
<h5><b>Ag. Head Credit & Risk Department <span style="margin-left:240px"> Managing Director | CEO</span></b></h5><br>


</span></h5><br><br><br>
<h5 style="margin-left:200px"><b><u>MEMORANDUM OF ACCEPTANCE</u></b><br><br><h5>
<h5>I/We have read this offer letter and fully understand it. I/We are pleased to accept the offer for the facility<br> on the terms and conditionscontained herein and agree to be bound by them.</h5><br>

<h5><b>Name:_______________________________<span style="margin-left:80px">Signature & Date:__________________________</span></b></h5>
<h5><b>Designation:__________________________<span style="margin-left:80px">Telephone:________________________________</span></b></h5>

<h5><b>Name:_______________________________<span style="margin-left:80px">Signature & Date:__________________________</span></b></h5>
<h5><b>Designation:__________________________<span style="margin-left:80px">Telephone:________________________________</span></b></h5><br?

<i><b>I/We, the guarantors of the above named customer hereby witness below:</b></i><br>
<h5><b>Name:_______________________________<span style="margin-left:80px">Signature & Date:__________________________</span></b></h5>
<h5><b>Designation:__________________________<span style="margin-left:80px">Telephone:_________________________________</span></b></h5>

<h5><b>Name:_______________________________<span style="margin-left:80px">Signature & Date:___________________________</span></b></h5>
<h5><b>Designation:__________________________<span style="margin-left:80px">Telephone:_________________________________</span></b></h5><br?



</div>
<br><br><br>




<a style="margin-left: 280px" class="btn" href="{{ URL::previous() }}" ><i class=""></i><b>Back</b></a>
<button class="btn" onclick="myFunction()">Print Certificate</button>











@endforeach

</br?></br?></h5></h5></div></div></div></div></div>



<script>
function myFunction() {
  window.print();
}
</script>

</body></html>




