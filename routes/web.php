<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'Smart', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('add', 'SmartThingsController@addSmartView')->name('add.smart.view');
    Route::post('submit', 'SmartThingsController@addSmartSubmit')->name('add.smart.submit');
    Route::get('view', 'SmartThingsController@viewSmartList')->name('view.smart.list');
    Route::get('submitted', 'SmartThingsController@submittedSmartView')->name('submitted.smart.view');
});

Route::get('/', function () {
    return view('home');
});
