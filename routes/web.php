<?php

use Illuminate\Support\Facades\Route;
// PRINCIAPAL ROUTA
Route::get('/eboostify', function () {
    return view("welcome");
});

// GRUPOS DE ROTAS PARA OS USERS
Route::prefix("eboostify/user")->group(function(){

    Route::get('/{user}', function(\App\Models\User $user){
        return $user;
    });

    Route::get('/jkhhj', function(){
        return "Detalhes do usuário";
    });
});
