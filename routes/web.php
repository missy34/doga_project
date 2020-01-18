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

// Route::get('/', function () {
//     return view('admin/login');
// });
Route::get('/', function () {
    return view('users/mypage');
});
// Route::get('/', function () {
//     return view('users/profile');
// });
// Route::get('/', function () {
//     return view('users/profile_view');
// });
// Route::get('/', function () {
//     return view('users/profile3');
// });
// Route::get('/', function () {
//     return view('jobs/list');
// });

// Route::get('/', function () {
//     return view('jobs/detail');
// });
// Route::get('/', function () {
//     return view('clients/home');
// });

// Route::get('/', function () {
//     return view('clients/post');
// });
// Route::get('/', function () {
//     return view('clients/login');
// });


Route::group(['middleware' => 'auth:user'], function () {
// Route::group(['middleware' => 'auth'], function () {

//user
    Route::get('/home', 'HomeController@index');
    Route::get('profile_view', 'HomeController@profile_view');
    Route::get('profile2_view', 'HomeController@profile2_view');
    Route::get('profile3_view', 'HomeController@profile3_view');
    Route::get('/profile', 'HomeController@profile');
    Route::get('/profile2', 'HomeController@profile2');
    Route::get('/profile3', 'HomeController@profile3');
    Route::post('/profile3Store', 'HomeController@profile3Store');
});

//client
Route::post('/clients/ClientLogin', 'ClientController@ClientLogin');
Route::post('/clientsRegister', 'ClientController@register');
Route::get('/clients/register_form', 'ClientController@registerForm');
Route::get('/clients/post2', 'ClientController@post2');
Route::post('/clientsProfile', 'ClientController@profileUpdate');
Route::get('/clients/home', 'ClientController@clientHome');


//job
Route::get('/jobs/in', 'JobController@jobIn');
Route::post('/jobs/post', 'JobController@jobPost');
// Route::post('/jobs/list', 'JobController@jobList');

Route::get('/jobs/jobUpdate/{jobs}', 'JobController@jobUpdate');
Route::post('/jobs/jobEdit/{jobs}', 'JobController@jobEdit');
Route::post('/jobs/jobNew/{jobs}', 'JobController@jobNew');
Route::post('/jobs/jobStop/{jobs}', 'JobController@jobStop');
Route::post('/jobs/jobDelete/{jobs}', 'JobController@jobDelete');
Route::post('/jobs/edit', 'JobController@edit');



// admin認証不要
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

// adminログイン後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});




Route::get('/home', 'HomeController@index')->name('home');
