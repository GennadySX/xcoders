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

function check() {
    if (!Auth::check()){
        return redirect('/');
    }
}

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function() {
	return view('test.per');
});

Auth::routes();
//Route::get('log',)



Route::prefix('/dashboard')->group(function () {

    Route::get('/', function () {
        check();
            return view('dashboard.cap');

    });
    Route::get('/logout.html', function () {
        check();
        return view('dashboard.cap');

    });
    Route::get('/profile', function () {
        check();
        return view('dashboard.sub.profile');
    });

    Route::get('/stock', function () {
        check();
        return view('dashboard.sub.stock');
    });

    Route::get('/stock/control', function () {
        check();
        return view('dashboard.sub.control_stock');
    });

    Route::get('/employees/control', function () {
        check();
        return view('dashboard.sub.control_employees');
    });
    Route::get('/employees/admin', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '3']);
    });
    Route::get('/employees/manager', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '6']);
    });
    Route::get('/employees/secretary', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '5']);
    });
    Route::get('/employees/directorShop', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '4']);
    });
    Route::get('/employees/operator', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '7']);
    });
    Route::get('/employees/seller', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '9']);
    });
    Route::get('/employees/master', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '8']);
    });
    Route::post('/employees/del', 'EmployeesController@del');
    Route::post('/employees/control', 'EmployeesController@run');
});


Route::post('/dashboard/profile/update', 'UserUpdate@update');
