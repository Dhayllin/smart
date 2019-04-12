<?php
use App\Http\Controllers\RestTest;

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');    
    Auth::routes();        
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resources([
        'sections' => 'Petition\SectionController',
        'types' => 'Petition\TypeController',
        'demands' => 'Petition\DemandController',
  ]);
    
  Route::get('list-sections','Petition\SectionController@list')->name('list-sections');
  Route::get('test','Petition\SectionController@testDelete')->name('test');
  Route::get('list-demands','Petition\DemandController@list')->name('list-demands');
  Route::get('list-types','Petition\TypeController@list')->name('list-types'); 
    

});