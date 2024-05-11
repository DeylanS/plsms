<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertDomainController extends Controller
{
    public function NewExpertView() {
        return view('ExpertDomain.ExpertForm');
    }

    public function OwnExpertListView() {
        return view('ExpertPersonal.ViewOwnExpertList');
    }

    public function DetailExpertView() {
        return view('ExpertPersonal.ViewExpert');
    }

    public function EditExpertView() {
        return view('ExpertPersonal.EditExpertForm');
    }

    public function AllExpertListView() {
        return view('ExpertAll.ViewAllExpertList');
    }
}
