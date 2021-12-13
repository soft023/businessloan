<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@showdashboard')->name('showdashboard');




Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin');
Route::get('/manageruser', 'SuperAdminController@showusers')->name('showusers');
Route::post('/deletestaff', 'SuperAdminController@deletestaff')->name('deletestaff');








Route::get('/ro', 'RoController@index')->name('ro');
Route::get('/ro/loanform1', 'RoController@loanform1')->name('loanform1');
Route::get('/ro/rejectedloan', 'RoController@rejectedloan')->name('rejectedloan');
Route::get('/ro/loanhistory', 'RoController@loanhistory')->name('loanhistory');
Route::post('/ro/confirmdata', 'RoController@confirmloan')->name('confirmdata');
Route::post('/ro/insertloanform', 'RoController@insertloanform')->name('insertloanform');
//Route::get('/editcustomer/{id}', 'RoController@editcustomer')->name('editcustomer');
Route::get('/viewcustomer/{id}', 'RoController@viewcustomer')->name('viewcustomer');
Route::post('/deletecustomer', 'RoController@deletecustomer')->name('deletecustomer');






Route::get('/uh', 'UhController@index')->name('uh');
Route::get('/uh/updaterequest/{id}', 'UhController@updaterequest')->name('uhupdaterequest');
Route::get('/uh/allpendingrequest', 'UhController@pendingrequest')->name('uhpendingrequest');
Route::post('/uhdeclinerequest', 'UhController@declinerequest')->name('uhdeclinerequest');
Route::post('/uhapproverequest', 'UhController@approverequest')->name('uhapproverequest');
Route::get('/uh/approve/{id}', 'UhController@uhapprove')->name('uhapprove');
Route::get('/uh/decline/{id}', 'UhController@uhdecline')->name('uhdecline');
Route::get('/uh/allloan', 'UhController@allloan')->name('uhallloan');
Route::get('/uh/viewloan/{id}', 'UhController@viewloan')->name('uhviewloan');








Route::get('/ca', 'CaController@index')->name('ca');         
Route::get('/ca/updaterequest/{id}', 'CaController@updaterequest')->name('caupdaterequest');
Route::get('/ca/allpendingrequest', 'CaController@pendingrequest')->name('capendingrequest');
Route::post('/cadeclinerequest', 'CaController@declinerequest')->name('cadeclinerequest');
Route::post('/caapproverequest', 'CaController@approverequest')->name('caapproverequest');
Route::get('/ca/approve/{id}', 'CaController@caapprove')->name('caapprove');
Route::get('/ca/decline/{id}', 'CaController@cadecline')->name('cadecline');
Route::get('/ca/allloan', 'CaController@allloan')->name('caallloan');
Route::get('/ca/viewloan/{id}', 'CaController@viewloan')->name('caviewloan');
Route::get('/ca/viewapprovedloan/{id}', 'CaController@viewapprovedloan')->name('caviewapprovedloan');
Route::get('/ca/approvedloans', 'CaController@approvedloans')->name('caapprovedloans');
Route::post('/ca/profitexp', 'ProfitanalysisController@profitexp')->name('profitexp');




Route::get('/fincon', 'FinconController@index')->name('fincon');
Route::get('/fincon/updaterequest/{id}', 'FinconController@updaterequest')->name('finconupdaterequest');
Route::get('/fincon/allpendingrequest', 'FinconController@pendingrequest')->name('finconpendingrequest');
Route::post('/fincondeclinerequest', 'FinconController@declinerequest')->name('fincondeclinerequest');
Route::post('/finconapproverequest', 'FinconController@approverequest')->name('finconapproverequest');
Route::get('/fincon/approve/{id}', 'FinconController@finconapprove')->name('finconapprove');
Route::get('/fincon/decline/{id}', 'FinconController@fincondecline')->name('fincondecline');
Route::get('/fincon/allloan', 'FinconController@allloan')->name('finconallloan');
Route::get('/fincon/viewloan/{id}', 'FinconController@viewloan')->name('finconviewloan');





Route::get('/control', 'IcController@index')->name('control');
Route::get('/control/updaterequest/{id}', 'IcController@updaterequest')->name('controlupdaterequest');
Route::get('/control/allpendingrequest', 'IcController@pendingrequest')->name('controlpendingrequest');
Route::post('/controldeclinerequest', 'IcController@declinerequest')->name('controldeclinerequest');
Route::post('/controlapproverequest', 'IcController@approverequest')->name('controlapproverequest');
Route::get('/control/approve/{id}', 'IcController@controlapprove')->name('controlapprove');
Route::get('/control/decline/{id}', 'IcController@controldecline')->name('controldecline');
Route::get('/control/allloan', 'IcController@allloan')->name('controlallloan');
Route::get('/control/viewloan/{id}', 'IcController@viewloan')->name('controlviewloan');





Route::get('/md', 'MdController@index')->name('md');
Route::get('/allusers', 'MdController@showmdusers')->name('showmdusers');
Route::get('/allunits', 'MdController@showmdunits')->name('showmdunits');
Route::get('/allroles', 'MdController@showmdroles')->name('showmdroles');
Route::get('/md/updaterequest/{id}', 'MdController@updaterequest')->name('mdupdaterequest');
Route::get('/md/allpendingrequest', 'MdController@pendingrequest')->name('mdpendingrequest');
Route::post('/mddeclinerequest', 'MdController@declinerequest')->name('mddeclinerequest');
Route::post('/mdapproverequest', 'MdController@approverequest')->name('mdapproverequest');
Route::get('/md/approve/{id}', 'MdController@mdapprove')->name('mdapprove');
Route::get('/md/decline/{id}', 'MdController@mddecline')->name('mddecline');
Route::get('/md/allloan', 'MdController@allloan')->name('mdallloan');
Route::get('/md/viewloan/{id}', 'MdController@viewloan')->name('mdviewloan');

