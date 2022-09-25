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

Route::group(['prefix'=>'farm', 'middleware'=>['auth']],function(){
    Route::get('/', 'FarmController@index'); 
    Route::get('/farm-category', 'CategoryController@getCategory')->name('Category');
    Route::get('/create-category','CategoryController@create'); 
    Route::get('/edit-category/{category_id}','CategoryController@getEditForm')->name('Category Form');
    Route::get('/update-category/{category_id}','CategoryController@updateCategory');
    Route::get('/delete-category/{category_id}','CategoryController@delete');

    Route::get('/plots', 'PlotsController@getPlots')->name('Plots');
    Route::get('/create-plot', 'PlotsController@createPlot');
    Route::get('/edit-plot/{plot_number}','PlotsController@getPlotEditForm')->name('Edit Plot Form');
    Route::get('/update-plot/{plot_number}','PlotsController@updatePlotInformation');
    Route::get('/delete-plot/{plot_number}','PlotsController@delete');

    Route::get('/expenses', 'FarmExpensesController@getExpenses')->name('Expenses');
    Route::get('/harvest', 'HarvestController@getHarvest')->name('Harvest');
    Route::get('/new-reports', 'FarmReportsController@getNewReports')->name('New Reports');
    Route::get('/old-reports', 'FarmReportsController@getOldReports')->name('Old Reports');
});
