<?php

Route::group(['namespace' => 'Form'], function(){

    //verbo get
    Route::get('/', 'TesteController@all')->name('users.all');
    Route::get('usuarios', 'TesteController@all')->name('users.all');
    Route::get('usuarios/novo', 'TesteController@create')->name('users.create');
    Route::get('usuarios/editar/{user}', 'TesteController@edit')->name('users.edit');
    Route::get('usuarios/{user}', 'TesteController@show')->name('users.show');

    // verbo post
    Route::post('usuarios/inserir', 'TesteController@store')->name('users.store');

    // verbo put
    Route::put('usuarios/atualizar/{user}', 'TesteController@update')->name('users.update');

    // verbo delete
    Route::delete('usuarios/excluir/{user}', 'TesteController@delete')->name('users.delete');

});
