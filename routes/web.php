<?php


use App\Http\Controllers\ExpertDomainController;
use App\Http\Controllers\ProgressMonitorController;
use Illuminate\Support\Facades\Route;

//<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});


//======= HEAD
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

//MODULE 4 - MUHAMAD SYARIFUDIN BIN MOHD AZON (CB22126)
Route::get('/ManagePerformanceHome', [ProgressMonitorController::class, 'ManagePerformanceHome'] )->name('ManagePerformance.ManagePerformanceHome');

// =======
//     return view('welcome'); 
// });
//>>>>>>> f361e6d55fa102b2e85d93dcbf1f1361ea2d1524
