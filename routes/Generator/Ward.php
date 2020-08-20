<?php
/**
 * Wards
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Wards'], function () {
        Route::resource('wards', 'WardsController');
        //For Datatable
        Route::post('wards/get', 'WardsTableController')->name('wards.get');
    });
    
});