<?php
/**
 * District
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'District'], function () {
        Route::resource('districts', 'DistrictsController');
        //For Datatable
        Route::post('districts/get', 'DistrictsTableController')->name('districts.get');
    });
    
});