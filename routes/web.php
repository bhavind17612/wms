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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::post('moblogout', [App\Http\Controllers\mobileHomeController::class, 'logout']);

Route::get('/mobile-login', function () {
    return view('mobileAuth/login');
})->name('mobLogin');

Route::post('attemptLogin', [App\Http\Controllers\mobileHomeController::class, 'mobileLogin'])->name('attemptLogin');


Route::group(['middleware' => ['auth', 'manus']], function(){
    

Route::match(['get','post'],'MobDashboard', [App\Http\Controllers\mobileHomeController::class, 'MobDashboard'])->name('mobDashboard');
    
Route::match(['get','post'],'Dashboard', [App\Http\Controllers\HomeController::class, 'Dashboard']);


Route::match(['get','post'],'Users', [App\Http\Controllers\UsersController::class, 'Users']);
Route::match(['get','post'],'Users/Add', [App\Http\Controllers\UsersController::class, 'AddUsers']);
Route::match(['get','post'],'Users/Edit/{id}', [App\Http\Controllers\UsersController::class, 'EditUsers']);
Route::match(['get','post'],'Users/Delete/{id}', [App\Http\Controllers\UsersController::class, 'DeleteUsers']);



Route::match(['get','post'],'Departments', [App\Http\Controllers\DepartmentController::class, 'index']);
Route::match(['get','post'],'Departments/Add', [App\Http\Controllers\DepartmentController::class, 'AddDept']);
Route::match(['get','post'],'Departments/Edit/{id}', [App\Http\Controllers\DepartmentController::class, 'EditDept']);
Route::match(['get','post'],'Departments/Delete/{id}', [App\Http\Controllers\DepartmentController::class, 'DeleteDept']);

Route::match(['get','post'],'Menus', [App\Http\Controllers\MenuController::class, 'index']);
Route::match(['get','post'],'Menus/Add', [App\Http\Controllers\MenuController::class, 'AddMenu']);
Route::match(['get','post'],'Menus/Edit/{id}', [App\Http\Controllers\MenuController::class, 'EditMenu']);
Route::match(['get','post'],'Menus/Delete/{id}', [App\Http\Controllers\MenuController::class, 'DeleteMenu']);


Route::match(['get','post'],'OrderHeaders', [App\Http\Controllers\OrderHeaderController::class, 'index']);
Route::match(['get','post'],'OrderHeaders/Add', [App\Http\Controllers\OrderHeaderController::class, 'AddOrderHeader']);
Route::match(['get','post'],'OrderHeaders/Edit/{id}', [App\Http\Controllers\OrderHeaderController::class, 'Edit']);
Route::match(['get','post'],'OrderHeaders/general/{id}', [App\Http\Controllers\OrderHeaderController::class, 'GeneralOrderHeader']);
Route::match(['get','post'],'OrderHeaders/generalEdit/{id}', [App\Http\Controllers\OrderHeaderController::class, 'GeneralEdit']);
Route::match(['get','post'],'OrderHeaders/pickup-delivery/{id}', [App\Http\Controllers\OrderHeaderController::class, 'PickupDelivery']);
Route::match(['get','post'],'OrderHeaders/fulfillment/{id}', [App\Http\Controllers\OrderHeaderController::class, 'Fulfillment']);
Route::match(['get','post'],'OrderHeaders/fulfillmentEdit/{id}',[App\Http\Controllers\OrderHeaderController::class, 'FulfillmentEdit']);
Route::match(['get','post'],'OrderHeaders/shipping/{id}', [App\Http\Controllers\OrderHeaderController::class, 'Shipping']);
Route::match(['get','post'],'OrderHeaders/shippingEdit/{id}', [App\Http\Controllers\OrderHeaderController::class, 'ShippingEdit']);
Route::match(['get','post'],'OrderHeaders/misc/{id}', [App\Http\Controllers\OrderHeaderController::class, 'Misc']);
Route::match(['get','post'],'OrderHeaders/miscEdit/{id}', [App\Http\Controllers\OrderHeaderController::class, 'MiscEdit']);
Route::match(['get','post'],'OrderHeaders/order-lines/{id}', [App\Http\Controllers\OrderHeaderController::class, 'OrderLines']);
Route::match(['get','post'],'OrderHeaders/add-lines/{id}', [App\Http\Controllers\OrderHeaderController::class, 'AddLines']);
Route::match(['get','post'],'OrderHeaders/edit-lines/{id}', [App\Http\Controllers\OrderHeaderController::class, 'EditLines']);
Route::match(['get','post'],'OrderHeaders/Delete/{id}', [App\Http\Controllers\OrderHeaderController::class, 'DeleteOrderHeader']);




Route::match(['get','post'],'Transaction', [App\Http\Controllers\TransactionController::class, 'index']);
Route::match(['get','post'],'Transaction/Add', [App\Http\Controllers\TransactionController::class, 'AddTran']);
Route::match(['get','post'],'Transaction/Edit/{id}', [App\Http\Controllers\TransactionController::class, 'EditTran']);
Route::match(['get','post'],'Transaction/Delete/{id}', [App\Http\Controllers\TransactionController::class, 'DeleteTran']);



Route::match(['get','post'],'MenuMaster', [App\Http\Controllers\MenusController::class, 'index']);
Route::match(['get','post'],'MenuMaster/Add', [App\Http\Controllers\MenusController::class, 'AddTran']);
Route::match(['get','post'],'MenuMaster/Edit/{id}', [App\Http\Controllers\MenusController::class, 'EditTran']);
Route::match(['get','post'],'MenuMaster/Delete/{id}', [App\Http\Controllers\MenusController::class, 'DeleteTran']);



});