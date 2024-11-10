<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultarDadosController;
use App\Http\Controllers\UploadDoArquivoController;
//rota de upload
Route::post('/upload', [UploadDoArquivoController::class, 'uploadFile']);
//rota de consulta
Route::get('/consultar', [consultarDadosController::class, 'consultarDados']);
