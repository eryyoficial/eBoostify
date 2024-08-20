<?php

use Illuminate\Support\Facades\Route;
// PRINCIAPAL ROUTA
Route::get('/eboostify', function () {
    return view("welcome");
});

// GRUPOS DE ROTAS PARA OS USERS
Route::prefix("eboostify/user")->group(function(){

    Route::get('/{user:email}', function(\App\Models\User $user){
        return $user;
    });

    Route::get('/jkhhj', function(){
        return "Detalhes do usuário";
    });
});



Route::get('request', function(\Illuminate\Http\Request, $request){
    $r = $request->all();

    return $r;
});
