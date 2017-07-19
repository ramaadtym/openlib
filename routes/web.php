<?php


Route::get('/','IndexController@index');


Route::get('/board', 'IndexController@board');

Route::post('/simpan', 'IndexController@simpan');
Route::get('/logout', 'IndexController@logout');

Auth::routes();

Route::post('/login','IndexController@login');

Route::get('/pinjam','DashboardController@pinjam');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/full', 'DashboardController@full_site');
Route::get('/book/{judul}', 'DashboardController@book');
Route::put('/pjg', 'DashboardController@pjg');


Route::post('/ulas', 'UlasanController@ulas');
Route::get('/usulkatalog', 'KatalogController@usulkatalog');
Route::post('/simpankatalog', 'KatalogController@simpankatalog');

Route::get('/admin','KatalogController@admin');
Route::post('/setuju', 'KatalogController@disetuju');


/*Route::get('/', function () {
    if(Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('/index');
    }
});*/
