<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressMonitorController extends Controller
{
    public function AddDraftThesisFeedback() {
        return view('CRMPprogressMonitor.AddDraftThesisFeedback');
    }
    public function AddWeeklyFocusFeedback() {
        return view('CRMPprogressMonitor.AddWeeklyFocusFeedback');
    }
    public function ViewPlatinumList() {
        return view('CRMPprogressMonitor.ViewPlatinumList');
    }
    public function CRMPprofile() {
        return view('CRMPprogressMonitor.CRMPprofile');
    }
    public function AssignCRMP() {
        return view('ManageCRMPplatinum.AssignCRMP');
    }
    public function SearchPlatinum() {
        return view('ManageCRMPplatinum.SearchPlatinum');
    }
    public function ManagePerformanceHome() {
        return view('ManagePerformance.ManagePerformanceHome');
    }
    public function EditDraftThesis() {
        return view('ManagePerformance.EditDraftThesis');
    }
    public function EditWeeklyFocus() {
        return view('ManagePerformance.EditWeeklyFocus');
    }
    public function NewDraftThesisForm() {
        return view('ManagePerformance.NewDraftThesisForm');
    }
    public function NewWeeklyFocusForm() {
        return view('ManagePerformance.NewWeeklyFocusForm');
    }
    public function ViewDraftThesis() {
        return view('ManagePerformance.ViewDraftThesis');
    }
    public function ViewWeeklyFocus() {
        return view('ManagePerformance.ViewWeeklyFocus');
    }
    public function ViewFeedback() {
        return view('ManagePerformance.ViewFeedback');
    }
    public function Report() {
        return view('ManagePerformance.Report');
    }

}