<?php

Route::get('/', 'Template\HomeController@index');
Route::post('/contato', 'Template\ContactController@post');

Route::get('/{joker}', function () {
    return redirect('/');
});