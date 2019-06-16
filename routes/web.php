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

Route::get('/','MainController@login');
Route::get('/postlogin', 'MainController@postLogin');
Route::get('/select_financial', 'MainController@selectFinancial');
Route::get('/dashboard', 'MainController@dashboard');

Route::get('/company', function () {return view('company.company_list');
});

Route::get('/add_company', function () {return view('company.add_company');
});

Route::get('/edit_company', function () {return view('company.edit_company');
});

Route::get('/view_company', function () {return view('company.view_company');
});

//Root For Unit

Route::get('/unit_list', function () {return view('unit.unit_list');
});
