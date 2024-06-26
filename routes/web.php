<?php


use App\Http\Controllers\ExpertDomainController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ProgressMonitorController;
use App\Http\Controllers\WeeklyFocusController;
use App\Http\Controllers\DraftThesisController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CRMPProgressMonitorController;
use App\Http\Controllers\ManageCRMPPlatinumController;
use Illuminate\Support\Facades\Route;

//<<<<<<< HEAD
Route::get('/', [PublicationController::class, 'create'])->name('PublicationPersonal.NewPublicationForm'); 

//======= HEAD
use App\Http\Controllers\HomeController;

//Route::redirect('/', '/home');



//Route::get('/', function () {
// <<<<<<< HEAD
//    return view('welcome');
//});

//MODULE 2 - HANIS SABRINA BINTI MOHD KHAIRUL MUZAMMIL (CB22157)
Route::get('/NewExpertForm', [ExpertDomainController::class, 'NewExpertView'] )->name('ExpertPersonal.NewExpertForm');
Route::post('/expert/store', [ExpertDomainController::class, 'store'])->name('expert.store');
Route::get('/ViewOwnExpertList', [ExpertDomainController::class, 'OwnExpertListView'] )->name('ExpertPersonal.ViewOwnExpertList');
Route::get('/ViewExpert/{Expert_ID}', [ExpertDomainController::class, 'DetailExpertView'] )->name('ExpertPersonal.ViewExpert');
Route::get('DeleteExpert/{Expert_ID}', [ExpertDomainController::class, 'deleteExpert'])->name('ExpertPersonal.DeleteExpert');
Route::get('/EditExpert/{Expert_ID}', [ExpertDomainController::class, 'EditExpertView'] )->name('ExpertPersonal.EditExpert');
Route::put('UpdateExpert/{Expert_ID}', [ExpertDomainController::class, 'updateExpert'])->name('ExpertPersonal.UpdateExpert');

Route::get('/ViewAllExpertList', [ExpertDomainController::class, 'AllExpertListView'] )->name('ExpertAll.ViewAllExpertList');
Route::get('/expert/searchExpert', [ExpertDomainController::class, 'searchExpert'])->name('ExpertAll.ViewAllExpertList');
Route::get('/ViewExpertDetails/{Expert_ID}', [ExpertDomainController::class, 'DetailAllExpertView'] )->name('ExpertAll.ViewExpertDetails');
Route::get('/ViewReportOfExpert', [ExpertDomainController::class, 'ReportExpert'] )->name('ExpertAll.ViewReportOfExpert');
Route::get('/expert/filterReport', [ExpertDomainController::class, 'filterReport'] )->name('ExpertAll.ViewReportOfExpert');


//MODULE 3 - DEYLAN SHIVA (CB22138)
Route::get('/PublicationPersonal/ViewOwnPublicationList', [PublicationController::class, 'showOwnPublicationList'])->name('PublicationPersonal.ViewOwnPublicationList');
Route::post('/PublicationPersonal/store', [PublicationController::class, 'store'])->name('PublicationPersonal.store'); 
Route::get('/PublicationPersonal/NewPublicationForm', [PublicationController::class, 'create'])->name('PublicationPersonal.NewPublicationForm'); 
Route::get('/PublicationAll/ViewPublicationList', [PublicationController::class, 'index'])->name('PublicationAll.ViewPublicationList'); 
Route::get('/PublicationPersonal/ViewPublication/{id}', [PublicationController::class, 'showPublication'])->name('PublicationPersonal.ViewPublication');
Route::get('/PublicationPersonal/EditPublication/{id}', [PublicationController::class, 'edit'])->name('PublicationPersonal.EditPublication');
Route::put('/PublicationPersonal/update', [PublicationController::class, 'update'])->name('PublicationPersonal.update');
Route::put('/PublicationPersonal/update/{id}', [PublicationController::class, 'update'])->name('PublicationPersonal.update');
Route::get('/PublicationAll/ViewPublicationDetails/{id}', [PublicationController::class, 'showPublicationDetails'])->name('PublicationAll.ViewPublicationDetails');
Route::get('/PublicationAll/ViewReportOfPublication', [PublicationController::class, 'generateReport'])->name('PublicationAll.ViewReportOfPublication');
Route::delete('/PublicationPersonal/DeletePublication/{id}', [PublicationController::class, 'destroy'])->name('PublicationPersonal.DeletePublication');
Route::get('/PublicationAll/SearchPublication', [PublicationController::class, 'searchPublications'])->name('PublicationAll.SearchPublications');








//MODULE 4 - MUHAMAD SYARIFUDIN BIN MOHD AZON (CB22126)

// Static views
Route::view('/ViewPlatinumList', 'CRMPprogressMonitor.ViewPlatinumList')->name('crmp_progress_monitor.view_platinum_list');
Route::view('/AddWeeklyFocusFeedback', 'CRMPprogressMonitor.AddWeeklyFocusFeedback')->name('crmp_progress_monitor.add_weekly_focus_feedback');
Route::view('/AddDraftThesisFeedback', 'CRMPprogressMonitor.AddDraftThesisFeedback')->name('crmp_progress_monitor.add_draft_thesis_feedback');
Route::view('/CRMPprofile', 'CRMPprogressMonitor.CRMPprofile')->name('crmp_progress_monitor.crmp_profile');
Route::view('/SearchPlatinum', 'ManageCRMPplatinum.SearchPlatinum')->name('manage_crmp_platinum.search_platinum');
Route::view('/AssignCRMP', 'ManageCRMPplatinum.AssignCRMP')->name('manage_crmp_platinum.assign_crmp');
Route::view('/ManagePerformanceHome', 'ManagePerformance.ManagePerformanceHome')->name('manage_performance.home');

// ManagePerformance Routes
Route::prefix('manage-performance')->group(function() {
    Route::get('new-draft-thesis', [DraftThesisController::class, 'create'])->name('draft_thesis.create');
    Route::post('new-draft-thesis', [DraftThesisController::class, 'store'])->name('draft_thesis.store');
    Route::get('view-draft-thesis', [DraftThesisController::class, 'index'])->name('draft_thesis.index');
    Route::delete('delete-draft-thesis/{id}', [DraftThesisController::class, 'destroy'])->name('draft_thesis.destroy');

    Route::get('new-weekly-focus', [WeeklyFocusController::class, 'create'])->name('weekly_focus.create');
    Route::post('new-weekly-focus', [WeeklyFocusController::class, 'store'])->name('weekly_focus.store');
    Route::get('view-weekly-focus', [WeeklyFocusController::class, 'index'])->name('weekly_focus.index');
    Route::get('edit-weekly-focus/{id}', [WeeklyFocusController::class, 'edit'])->name('weekly_focus.edit');
    Route::put('update-weekly-focus/{id}', [WeeklyFocusController::class, 'update'])->name('weekly_focus.update');
    Route::delete('delete-weekly-focus/{id}', [WeeklyFocusController::class, 'destroy'])->name('weekly_focus.destroy');

    Route::get('/generate-report', [DraftThesisController::class, 'generate'])->name('report.generate');
});


// CRMPprogressMonitor Routes
Route::prefix('crmp-progress-monitor')->group(function() {
    Route::get('view-platinum-list', [WeeklyFocusController::class, 'index'])->name('view_platinum_list.index');
    Route::post('add-weekly-focus-feedback', [WeeklyFocusController::class, 'addFeedback'])->name('weekly_focus.add_feedback');
    Route::post('add-draft-thesis-feedback', [DraftThesisController::class, 'addFeedback'])->name('draft_thesis.add_feedback');
    Route::view('/CRMPprofile', 'CRMPprogressMonitor.CRMPprofile')->name('crmp_profile.index');

});

// ManageCRMPplatinum Routes
Route::prefix('manage-crmp-platinum')->group(function() {
    Route::get('search-platinum', [WeeklyFocusController::class, 'searchPlatinum'])->name('search_platinum.index');
    Route::post('assign-crmp', [DraftThesisController::class, 'assignCRMP'])->name('assign_crmp.assign');
});