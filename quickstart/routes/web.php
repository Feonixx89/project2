<?php

Route::get('tasks', 'TasksController@index')->name('tasks.index');

Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

Route::post('tasks/store', 'TasksController@store')->name('tasks.store');