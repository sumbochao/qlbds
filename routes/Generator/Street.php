<?php
/**
 * Street
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Street'], function () {
        Route::resource('streets', 'StreetsController');
        //For Datatable
        Route::post('streets/get', 'StreetsTableController')->name('streets.get');
    });
    
});