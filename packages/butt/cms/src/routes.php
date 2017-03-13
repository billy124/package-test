<?php

Route::get('pages', 'butt\cms\Controllers\PageController@index');
Route::get('pages/{page}', 'butt\cms\Controllers\PageController@show');