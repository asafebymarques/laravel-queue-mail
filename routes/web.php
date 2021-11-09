<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', function() {

    $user = new stdClass();
    $user->name = 'Asafe Marques';
    $user->email = 'asafemrqs@gmail.com';

    //return new sendMail($user);

    \App\Jobs\sendMail::dispatch($user)->delay(now()->addSeconds('15'));
});
