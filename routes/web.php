<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Tag;
use PHPUnit\TextUI\Configuration\Group;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('test',function(){
    abort(403, 'Unauthorized action.');
});




/*products*/
Route::get('redirects','App\Http\Controllers\UserController@index')->middleware('isitadmin');
Route::get('product-list',[ProductController::class,'index'])->middleware(['isitadmin','checkadmin']);  
//Route::get('dashboard',[App\Http\Controllers\HomeController::class,'index']);
//Route::get('product-description',[ProductController::class,'productDescription']);
Route::get('create-product',[ProductController::class,'createProduct'])->middleware(['isitadmin','checkadmin']);
Route::post('save-product',[ProductController::class,'SaveProduct']);
Route::get('back-productlist',[ProductController::class,'backProductlist'])->middleware(['isitadmin','checkadmin']);
Route::get('edit-product/{id}',[ProductController::class,'editProduct'])->middleware(['isitadmin','checkadmin']);   
Route::post('update-product',[ProductController::class,'updateProduct']);    
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct'])->middleware(['isitadmin','checkadmin']);
Route::get('adminhome',[App\Http\Controllers\ProductController::class,'back'])->middleware(['isitadmin','checkadmin']);
Route::get("details/{id}",[ProductController::class,'details']);
Route::get('getadmindashboard',[UserController::class,'index']);
/*end products*/


/*users*/
Route::get('user-list',[UserController::class,'list'])->middleware(['isitadmin','checkadmin']);
Route::get('delete-user/{id}',[UserController::class,'deleteUser'])->middleware(['isitadmin','checkadmin']);  
Route::get('admin-list',[UserController::class,'adminList'])->middleware(['isitadmin','checkadmin']);
Route::get('edit-admin/{id}',[UserController::class,'EditAdmin'])->middleware(['isitadmin','checkadmin']);
Route::post('update-admin',[UserController::class,'UpdateAdmin']);
//Route::get('backadminlist',[UserController::class,'backadminlist']);
//Route::get('createuser',[UserController::class,'createUser']);
Route::get('AddUser',[UserController::class,'AddUser'])->middleware(['isitadmin','checkadmin']);
Route::post('save-user',[UserController::class,'SaveUser']);
Route::get('edit-user/{id}',[UserController::class,'EditUser'])->middleware(['isitadmin','checkadmin']);    
Route::post('update-user',[UserController::class,'UpdateUser']);
Route::get('back',[UserController::class,'index']);
Route::get('backtoadmin',[UserController::class,'backtoadmin']);
Route::get('backtoproducts',[ProductController::class,'index'])->middleware(['isitadmin','checkadmin']);


/*Admin*/
Route::get('create-admin',[UserController::class,'createAdmin'])->middleware(['isitadmin','checkadmin']);
Route::post('save-admin',[UserController::class,'saveAdmin']);
Route::get('delete-admin/{id}',[UserController::class,'deleteAdmin'])->middleware(['isitadmin','checkadmin']);
Route::get('edit-admin/{id}',[UserController::class,'editAdmin'])->middleware(['isitadmin','checkadmin']);  
Route::post('update-admin',[UserController::class,'updateAdmin']);  
Route::get('test',[UserController::class,'test']);







//Route::get('student-list',[StudentController::class,'go']);  
/*
Route::get('customer-list',[CustomerController::class,'index']);


Route::get('back-productlist',[ProductController::class,'backProductlist']);

Route::get('add-customer',[CustomerController::class,'addCustomer']);
Route::get('create-product',[ProductController::class,'createProduct']);

Route::post('save-customer',[CustomerController::class,'saveCustomer']);
Route::get('edit-customer/{id}',[CustomerController::class,'editCustomer']);
Route::post('update-customer',[CustomerController::class,'updateCustomer']);
Route::get('delete-customer/{id}',[CustomerController::class,'deleteCustomer']);    */



