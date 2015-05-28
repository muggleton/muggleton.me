<?php
// Overide project name wild card
Route::get('/projects/new', 'ProjectController@getNew');
Route::get('/projects/{project_name}', 'ProjectController@getView')->where('project_name', '[a-zA-Z-_]+');
Route::controller('/projects', 'ProjectController');

Route::controller('/contact', 'ContactController');
Route::controller('/admin', 'AdminController');

Route::controller('/', 'HomeController');
