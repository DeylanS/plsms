<?php

use App\Http\Controllers\ExpertDomainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ExpertForm', [ExpertDomainController::class, 'NewExpertView'] )->name('ExpertDomain.ExpertForm');
Route::get('/ViewOwnExpertList', [ExpertDomainController::class, 'OwnExpertListView'] )->name('ExpertPersonal.ViewOwnExpertList');
Route::get('/ViewExpert', [ExpertDomainController::class, 'DetailExpertView'] )->name('ExpertPersonal.ViewExpert');
Route::get('/EditExpertForm', [ExpertDomainController::class, 'EditExpertView'] )->name('ExpertPersonal.EditExpertForm');
Route::get('/ViewAllExpertList', [ExpertDomainController::class, 'AllExpertListView'] )->name('ExpertAll.ViewAllExpertList');
