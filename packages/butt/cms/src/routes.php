<?php

Route::group(['namespace' => 'butt\cms\Controllers'], function() {

    // Get a list of all pages
    Route::get('pages',  'PageController@index')->name('view.cms.page.list');  

    // Generic endpoint for all cmsable pages
    Route::get('{any}',  'PageController@show')->name('view.cms.page');

});