<?php

Route::get('tasks', 'TasksController@index')->name('tasks.index');

Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

Route::post('tasks/store', 'TasksController@store')->name('tasks.store');

Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');

Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');