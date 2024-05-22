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
Route::get('/AddDraftThesisFeedback', [ProgressMonitorController::class, 'AddDraftThesisFeedback'] )->name('CRMPprogressMonitor.AddDraftThesisFeedback');
Route::get('/AddWeeklyFocusFeedback', [ProgressMonitorController::class, 'AddWeeklyFocusFeedback'] )->name('CRMPprogressMonitor.AddWeeklyFocusFeedback');
Route::get('/ViewPlatinumList', [ProgressMonitorController::class, 'ViewPlatinumList'] )->name('CRMPprogressMonitor.ViewPlatinumList');
Route::get('/CRMPprofile', [ProgressMonitorController::class, 'CRMPprofile'] )->name('CRMPprogressMonitor.CRMPprofile');
Route::get('/AssignCRMP', [ProgressMonitorController::class, 'AssignCRMP'] )->name('ManageCRMPplatinum.AssignCRMP');
Route::get('/SearchPlatinum', [ProgressMonitorController::class, 'SearchPlatinum'] )->name('ManageCRMPplatinum.SearchPlatinum');
Route::get('/ManagePerformanceHome', [ProgressMonitorController::class, 'ManagePerformanceHome'] )->name('ManagePerformance.ManagePerformanceHome');
Route::get('/EditDraftThesis', [ProgressMonitorController::class, 'EditDraftThesis'] )->name('ManagePerformance.EditDraftThesis');
Route::get('/EditWeeklyFocus', [ProgressMonitorController::class, 'EditWeeklyFocus'] )->name('ManagePerformance.EditWeeklyFocus');
Route::get('/NewDraftThesisForm', [ProgressMonitorController::class, 'NewDraftThesisForm'] )->name('ManagePerformance.NewDraftThesisForm');
Route::get('/NewWeeklyFocusForm', [ProgressMonitorController::class, 'NewWeeklyFocusForm'] )->name('ManagePerformance.NewWeeklyFocusForm');
Route::get('/ViewDraftThesis', [ProgressMonitorController::class, 'ViewDraftThesis'] )->name('ManagePerformance.ViewDraftThesis');
Route::get('/ViewWeeklyFocus', [ProgressMonitorController::class, 'ViewWeeklyFocus'] )->name('ManagePerformance.ViewWeeklyFocus');
Route::get('/ViewFeedback', [ProgressMonitorController::class, 'ViewFeedback'] )->name('ManagePerformance.ViewFeedback');
Route::get('/Report', [ProgressMonitorController::class, 'Report'] )->name('ManagePerformance.Report');

// =======
//     return view('welcome'); 
// });
//>>>>>>> f361e6d55fa102b2e85d93dcbf1f1361ea2d1524
