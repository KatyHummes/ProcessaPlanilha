<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/processa-planilha', [PessoaController::class, 'planilha']);