<?php

use App\Http\Controllers\ExpertDomainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ExpertForm', [ExpertDomainController::class, 'NewExpertView'] )->name('ExpertDomain.ExpertForm');
