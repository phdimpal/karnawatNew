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

Route::get('/select_financial', function () {return view('select_financial');
});

Route::get('/dashboard', function () {return view('dashboard');
});//Company Route Start
Route::get('/company', function () {return view('company.company_list');
});

Route::get('/add_company', function () {return view('company.add_company');
});

Route::get('/edit_company', function () {return view('company.edit_company');
});

Route::get('/view_company', function () {return view('company.view_company');
});
//Company Route End

//Unit Route Start
Route::get('/unit_list', function () {return view('unit.unit_list');
});
//Unit Route End

//Customer Route Start
Route::get('/customer_list', function () {return view('customer.customer_list');
});

Route::get('/add_customer', function () {return view('customer.add_customer');
});

Route::get('/edit_customer', function () {return view('customer.edit_customer');
});

Route::get('/view_customer', function () {return view('customer.view_customer');
});
//Customer Route End

//User Rout Start
Route::get('/users_master_list', function () {return view('user.users_master_list');
});

Route::get('/view_users', function () {return view('user.view_users');
});

Route::get('/user_master', function () {return view('user.user_master');
});

Route::get('/edit_user_master', function () {return view('user.edit_user_master');
});


//User Route End