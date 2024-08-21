<?php

use Illuminate\Support\Facades\Route;
// PRINCIAPAL ROUTA

/* ============================= ROUTAS DO USUÁRIO =============================*/
Route::get('eboostify/usuario/{user}', [\App\Http\Controllers\UserController::class, 'show']);

// Route::get('/eboostify', function () {
//     return view("welcome");
// });

// // GRUPOS DE ROTAS PARA OS USERS
// Route::prefix("eboostify/user")->group(function(){

//     Route::get('/{user:email}', function(\App\Models\User $user){
//         return $user;
//     });

//     Route::get('/jkhhj', function(){
//         return "Detalhes do usuário";
//     });
// });


// Route::get('request', function(\Illuminate\Http\Request $request){
//     $r = $request->all();
//     return $r;
// });


