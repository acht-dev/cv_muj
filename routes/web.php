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
    return view('home');
});
Route::get('/role', function () {
    return view('role');
});
Route::get('/position', function () {
    return view('position');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/addCompany', function () {
    return view('addCompany');
});
Route::get('/customer', function () {
    return view('customer');
});
Route::get('/addCustomer', function(){
    return view('addCustomer');
});
Route::get('/AddOns', function(){
    return view('AddOns');
});
Route::get('/tambahAddOns', function(){
    return view('tambahAddOns');
});
Route::get('/masterFasilitas', function(){
    return view('master_fasilitas');
});
Route::get('/product', function(){
    return view('product');
});

Route::get('/role', 'roleController@getData');
Route::post('/tambahDataRole', 'roleController@storeData');
Route::get('/role/hapus/{role_id}', 'roleController@hapusData');
Route::get('/role/edit/{role_id}', 'roleController@editData');
Route::put('/role/update/{role_id}', 'roleController@upData');

Route::get('/position', 'PositionController@getData');
Route::post('/tambahDataPosisi', 'PositionController@storeData');
Route::get('/posisi/edit/{posit_id}', 'PositionController@editData');
Route::get('/posisi/hapus/{posit_id}', 'PositionController@deleteData');
Route::put('/posisi/update/{posit_id}', 'PositionController@upData');

Route::post('/tambahDataCompany', 'CompanyController@tambahData');
Route::get('/company','CompanyController@getData');
Route::get('/dataCompany/Hapus/{comp_id}', 'CompanyController@delData');
Route::get('/dataCompany/Edit/{comp_id}', 'CompanyController@editData');
Route::put('/dataCompany/Update/{comp_id}', 'CompanyController@upData');

Route::get('/customer', 'CustomerController@getData');
Route::get('/addCustomer', 'CustomerController@getDataComp');
Route::post('/tambahDataCustomer', 'CustomerController@storeData');
Route::get('/dataCustomer/Hapus/{cust_id}', 'CustomerController@delData');
Route::get('/dataCustomer/Edit/{cust_id}', 'CustomerController@editData');
Route::put('/dataCustomer/Update/{cust_id}', 'CustomerController@upData');

Route::get('/addUsers', 'UsersController@getAttributeData');
Route::post('/addUsers/StoreData', 'UsersController@storeData');
Route::get('/user', 'UsersController@getData');
Route::get('/user/delete/{user_id}', 'UsersController@delData');
Route::get('/user/edit/{user_id}', 'UsersController@editData');
Route::put('/user/update/{user_id}', 'UsersController@upData');

Route::post('/tambahAdd_ons', 'addonsController@tambah_addons');
Route::get('/AddOns', 'addonsController@get_add_ons');
Route::get('/AddOns/Hapus/{add_ons_id}', 'addonsController@delData');
Route::get('/AddOns/Edit/{add_ons_id}', 'addonsController@EditData');
Route::put('/AddOns/Update/{add_ons_id}', 'addonsController@UpdateData');

Route::post('/tambahfasilitas', 'facilities_masterController@tambaDataFas');
Route::get('/masterFasilitas', 'facilities_masterController@getDataFas');
Route::get('/masterFasilitas/edit/{id_fasilitas}', 'facilities_masterController@editData');
Route::get('/masterFasilitas/hapus/{id_fasilitas}', 'facilities_masterController@delData');
Route::put('/masterFasilitas/update/{id_fasilitas}', 'facilities_masterController@upData');

Route::get('/product', 'productController@getProduct');
Route::get('/addproduct', 'productController@getDataSpek');
Route::post('/addproduct/store', 'productController@StoreData');
Route::get('/product/hapus/{id_data}', 'productController@delData');