<?php
/**
 * Document
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Document'], function () {
        Route::resource('documents', 'DocumentsController');
        //For Datatable
        Route::post('documents/get', 'DocumentsTableController')->name('documents.get');
    });
    
});