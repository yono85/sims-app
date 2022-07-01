<?php

use Illuminate\Support\Facades\Route;
$root = '\App\Http\Controllers';


// page access

    
// Route::get('/', function()
// {
//     return view('welcome');
// });

Route::get('/', $root . '\access\index@login');
Route::get('/login', $root . '\access\index@login');
Route::get('/forgetpassword', $root . '\access\index@forget');
Route::get('/resetpassword', $root . '\access\index@pageForget');
Route::get('/registers/success', $root . '\access\register@success');
Route::get('/signup', $root . '\access\index@signup');
Route::get('/signup2', $root . '\access\index@signup2');
Route::get('/account/verification', $root . '\account\index@verification');


// Route::group(['prefix' => '/home'], function() use ($root)
// {
//     Route::get('/', $root . '\home\index@main');

//     //TASK
//     Route::get('/task', $root . '\home\task\index@main');

//     //CALENDAR
//     Route::get('/calendar', $root . '\home\calendar\index@main');

//     //EMPLOYE
//     Route::get('/employe', $root . '\home\employe\index@main');


//     // WIGET SCANER
//     Route::get('/scaner/wiget', $root . '\home\scaner\index@page');

//     //LOCATION ATTENDANCE
//     Route::get('/attendance/print', $root . '\home\attendance\manage@printLocation');
//     Route::get('/attendance/screen', $root . '\home\attendance\manage@screen');

//     //REPORT ABSEN
//     Route::get('/absen/report', $root . '\home\attendance\manage@report');

//     //INVENTORY
//     Route::get('/inventory', $root . '\home\inventory\index@main');
// });





// Route::group(['prefix' => '/testing'], function()
// {

//     Route::get('/excel', function()
//     {
//         return view('testing.excel');
//     });
//     // return view('testing.scaner.zxing');
//     // return view('testing.scaner.html5');

// });



Route::group(['prefix' => '/dashboard'], function() use ($root)
{
    Route::get('/', $root . '\dashboard\home\index@main');


    //PELAYANAN
    Route::get('/pelayanan/lembaga', $root . '\dashboard\pelayanan\lembaga\index@main');
    Route::get('/pelayanan/users', $root . '\dashboard\pelayanan\pengguna\index@main');

    //PAGE
    Route::get('/news/hibah', $root . '\dashboard\news\hibah\index@main');
    // Route::get('/news/pengumuman', $root . '\dashboard\news\pengumuman\index@main');


    //LEMBAGA
    Route::get('/lembaga/profile', $root . '\dashboard\lembaga\index@profile');

//     // customers
//     Route::get('/customers', $root . '\dashboard\customers\index@main');
//     Route::get('/customers/{any}', $root . '\dashboard\customers\index@detail');

//     //
//     Route::get('/orders', $root . '\dashboard\orders\index@main');

//     //products
//     Route::get('/product', $root . '\dashboard\products\index@main');

//     // verif orders
//     Route::get('/veriforders', $root . '\dashboard\veriforder\index@main');


//     // shiping
//     Route::get('/shiping', $root . '\dashboard\shiping\index@main');


//     // order stock
//     Route::get('/orderstock', $root . '\dashboard\orderstock\index@main');


//     // payment bulking
//     Route::get('/bulkingpayment', $root . '\dashboard\bulkingpayment\index@main');

//     //verif bulking
//     Route::get('/verifbulking', $root . '\dashboard\verifbulking\index@main');

    //marketing
    // Route::get('/marketing/pengajuan', $root . '\dashboard\marketing\pengajuan\index@main');
    // Route::get('/marketing/customers', $root . '\dashboard\marketing\customers\index@main');

    
    // inventory
    // Route::get('/inventory/tools', $root . '\dashboard\inventory\tools\index@main');
    // Route::get('/inventory/consumable', $root . '\dashboard\inventory\consumable\index@main');
    // Route::get('/inventory/pengajuan-alat', $root . '\dashboard\inventory\tools@main');
    // Route::get('/inventory/consumable/out', $root . '\dashboard\inventory\consumable\index@out');

    // employe
    // Route::get('/hrd/employe', $root . '\dashboard\hrd\index@main');
    // Route::get('/hrd/pengajuan-sdm', $root . '\dashboard\hrd\sdm@main');

    //manage
    Route::get('/manage/pengguna', $root . '\dashboard\pengguna\index@main');
    // Route::get('/manage/pengguna-old', $root . '\dashboard\pengguna\index@old');


    //COMPANY PROFILE
    Route::get('/manage/company/profile', $root . '\dashboard\manage\index@main');

    //ACCOUNT
    Route::get('/account', $root . '\dashboard\account\index@main');


//ORDERS
    // Route::get('/financial/orders', $root . '\dashboard\ordernew\index@main');

    // FINANCIAL
    // Route::get('/financial/orders', $root . '\dashboard\financial\index@main');


//     // PAGE DISTRIBUTOR
//     Route::get('/partner', $root . '\dashboard\partner\index@main');
//     Route::get('/partner/profile', $root . '\dashboard\partner\index@profile');


    //
//     Route::get('/pengaturan-umum', $root . '\dashboard\manage\index@main');

//     //account
//     Route::get('/account', $root . '\dashboard\account\index@main');
});


// //account
// Route::get('/account/verification', $root . '\account\index@verification');


// //invoice
// Route::get('/invoice/v1', $root . '\tools\prints\orders@invoice');

// //shiping
// Route::get('/shiping/v1', $root . '\tools\prints\orders@shiping');




// //ceking ongkir
// Route::get('/check-ongkir', $root . '\tools\cekongkir\index@main');


// //session login
// Route::post('/createsessionlogin', $root . '\access\index@createsession');
// Route::get('/sessionlogin', $root . '\access\index@session');

// Route::get('/testing', function()
// {
//     return view('testing.form.index');
// });

// // testing
// Route::get('/app/testing', $root . '\app\testing\index@main');

