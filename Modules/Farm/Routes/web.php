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

Route::prefix('farm')->group(function() {
    Route::get('/', 'FarmController@index');
    Route::get('/farm-category', 'CategoryController@getCategory')->name('Category');
    Route::get('/plots', 'PlotsController@getPlots')->name('Plots');
    Route::get('/expenses', 'FarmExpensesController@getExpenses')->name('Expenses');
    Route::get('/harvest', 'HarvestController@getHarvest')->name('Harvest');
    Route::get('/new-reports', 'FarmReportsController@getNewReports')->name('New Reports');
    Route::get('/old-reports', 'FarmReportsController@getOldReports')->name('Old Reports');
});
