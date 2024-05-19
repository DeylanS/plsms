<?php

use App\Http\Controllers\ExpertDomainController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

//Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/', function () {
// <<<<<<< HEAD
//     return view('welcome');
// });

//MODULE 2 - HANIS SABRINA BINTI MOHD KHAIRUL MUZAMMIL (CB22157)
Route::get('/NewExpertForm', [ExpertDomainController::class, 'NewExpertView'] )->name('ExpertPersonal.ExpertForm');
Route::get('/ViewOwnExpertList', [ExpertDomainController::class, 'OwnExpertListView'] )->name('ExpertPersonal.ViewOwnExpertList');
Route::get('/ViewExpert', [ExpertDomainController::class, 'DetailExpertView'] )->name('ExpertPersonal.ViewExpert');
Route::get('/EditExpert', [ExpertDomainController::class, 'EditExpertView'] )->name('ExpertPersonal.EditExpertForm');
Route::get('/ViewAllExpertList', [ExpertDomainController::class, 'AllExpertListView'] )->name('ExpertAll.ViewAllExpertList');
Route::get('/ViewExpertDetails', [ExpertDomainController::class, 'DetailAllExpertView'] )->name('ExpertAll.ViewExpertDetails');
Route::get('/ViewReportOfExpert', [ExpertDomainController::class, 'ReportExpert'] )->name('ExpertAll.ViewReportOfExpert');
// =======
//     return view('welcome'); 
// });
