<?php


Route::get('/', 'HomeController@index');
Route::get('/Notes/{note}', 'NotesController@notes');
