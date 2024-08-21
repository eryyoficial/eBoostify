<?php

use Illuminate\Support\Facades\Route;
// PRINCIAPAL ROUTA
Route::get('eboostify', function(){
    return view('welcome');
});

/* ============================= ROUTAS DO USUÁRIO =============================*/
Route::get('eboostify/user/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('eboostify/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');


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

Route::get('erro', function(){
    return view('erro');
})->name('erropage');