<?php

use Illuminate\Support\Facades\Route;
// PRINCIAPAL ROUTA
Route::get('/eboostify', function () {
    return view("welcome");
});

// GRUPOS DE ROTAS PARA OS USERS
Route::prefix("eboostify/user")->group(function(){

    Route::get('', function(){
        return "user";
    });

    Route::get('/{id}', function(){
        return "Detalhes do usuário";
    });
});
