<?php

use Illuminate\Support\Facades\Route;
use Psr\Log\LoggerInterface;

Route::get('/api/v1/lista', function (LoggerInterface $logger) {
    $logger->info('Rota /api/v1/lista acessada');
    return response()->json(["a", "b", "c"]);
});

Route::get('/', [App\Http\Controllers\Usuario::class, 'cadastrar']);
Route::post('/salvar', [App\Http\Controllers\Usuario::class, 'salvar']);


Route::post('cadatrar', function (){
    echo 'implementar';
});


//Route::get('/', 'Usuario@cadastro');
//Route::post('/salvar', 'Usuario@salvar');

