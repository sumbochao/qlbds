<?php
/**
 * Department
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Department'], function () {
        Route::resource('departments', 'DepartmentsController');
        //For Datatable
        Route::post('departments/get', 'DepartmentsTableController')->name('departments.get');
    });
    
});