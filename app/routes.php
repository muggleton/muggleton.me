<?php
Route::get('/projects/{project}', 'ProjectController@getView')->where('item_id', '[a-zA-Z-_]+');
Route::controller('/projects', 'ProjectController');
Route::controller('/contact', 'ContactController');
Route::controller('/', 'HomeController');
