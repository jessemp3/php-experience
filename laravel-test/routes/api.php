<?php


use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('lista', function () {
        return response()->json(["a", "b", "c"]);
    });
});
