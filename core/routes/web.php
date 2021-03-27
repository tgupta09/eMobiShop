<?php

use App\Http\Controllers\admindashcontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\logincp;
use App\Http\Controllers\loginmcp;
use App\Http\Controllers\userdashcontroller;
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

Route::get('/', [indexcontroller::class, 'index'])->name('index');
Route::get('/productdetails/{id}', [indexcontroller::class, 'showProductDetails'])->name('productdetials');
Route::post('/registerusers', [indexcontroller::class, 'registerUsers'])->name('registerUsers');
Route::post('/login', [logincp::class, 'processLogin'])->name('processlogin');
Route::get('/logoutcp', [logincp::class, 'logoutcp'])->name('logoutcp');
Route::get('/userdash', [userdashcontroller::class, 'index'])->name('showuserdash');
Route::get('/mcp-login', [loginmcp::class, 'showMcplogin'])->name('showmcplogin');
Route::post('/mcpprocesslogin', [loginmcp::class, 'processLoginMcp'])->name('mcpprocesslogin');
Route::get('/logoutmcp', [loginmcp::class, 'logoutmcp'])->name('logoutmcp');
Route::get('/admindash', [admindashcontroller::class, 'showMcpDashboard'])->name('showadmindash');
Route::post('/submitproduct', [userdashcontroller::class, 'submitproduct'])->name('submitproduct');
Route::post('/saveproductdraft', [userdashcontroller::class, 'saveproductdraft'])->name('saveproductdraft');
Route::post('/displaytableallcat', [userdashcontroller::class, 'displaytableallcat'])->name('displaytableallcat');
Route::post('/editsubmittedproduct', [userdashcontroller::class, 'editsubmittedproduct'])->name('editsubmittedproduct');
Route::post('/editdraft', [userdashcontroller::class, 'editdraft'])->name('editdraft');
Route::post('/enterdetailsintoeditformfields', [userdashcontroller::class, 'enterdetailsintoeditformfields'])->name('enterdetailsintoeditformfields');
Route::post('/displaytable', [admindashcontroller::class, 'displaytable'])->name('displaytable');
Route::post('/setpublish', [admindashcontroller::class, 'setpublish'])->name('setpublish');
Route::post('/setreject', [admindashcontroller::class, 'setreject'])->name('setreject');
Route::get('/coverttoexcel', [admindashcontroller::class, 'coverttoexcel'])->name('coverttoexcel');
Route::get('/redirectGithub', [logincp::class, 'redirectGithub'])->name('redirectGithub');
Route::get('/callbackGithub', [logincp::class, 'callbackGithub'])->name('callbackGithub');
Route::get('/fileupload', [indexcontroller::class, 'fileuploadview'])->name('fileupload');
Route::post('/fileuploadfun', [indexcontroller::class, 'fileuploadfun'])->name('fileuploadfun');
Route::post('/imgedit', [userdashcontroller::class, 'imgedit'])->name('imgedit');
