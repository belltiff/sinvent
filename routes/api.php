<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::apiResource('kategori', KategoriController::class);

// Route::delete('/test-delete/{id}', function ($id) {
//     $kategori = Kategori::find($id);

//     if (!$kategori) {
//         return response()->json(['status' => 'Kategori tidak ditemukan'], 404);
//     }

//     try {
//         $kategori->delete();
//         return response()->json(['status' => 'Kategori berhasil dihapus'], 200);
//     } catch (\Exception $e) {
//         return response()->json(['status' => 'Kategori tidak dapat dihapus', 'error' => $e->getMessage()], 500);
//     }
// });
