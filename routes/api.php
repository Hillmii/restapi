<?php
use App\Http\Controllers\BarangController;
use App\Models\Barang;


Route::prefix('barang')->group(function () {
    Route::apiResource('barangs', BarangController::class);
});