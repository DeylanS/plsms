<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertDomainController extends Controller
{
    public function NewExpertView() {
        return view('ExpertDomain.ExpertForm');
    }
}
