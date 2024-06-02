<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of Personal Expert Domain</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="header-left">
            <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
            <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png">
        </div>
        <div class="header-right">
            <h3 class="mr-5 fw-500">NAME</h3>
        </div>
    </div>

    <div class="side-nav">
        <div class="nav-profile">
            <p class="menu-header"><strong> PROFILE </strong></p>
            <p><a class="side-nav-link" href="#">PERSONAL</a> <p>
            <p><a class="side-nav-link" href="#">LIST USER</a><p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> EXPERT DOMAIN </strong></p>
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.NewExpertForm') }}">NEW EXPERT</a> </p>
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.ViewOwnExpertList') }}">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewAllExpertList') }}">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewReportOfExpert') }}">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="../CRMPprofile">CRMP PROFILE</a> </p>
            <p><a class="side-nav-link" href="../ManagePerformanceHome">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="../Report">REPORT</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>
    

    <div class="content">
        <h4 class="page-title">OWN EXPERT DOMAIN</h4>
        <!-- looping -->
        @if($expert->isEmpty())
            <p>No expert found.</p>
        @else
        @foreach ($expert as $expert)
        <div class="card">
            <div class="card-content-1">
                <a class="link-expert-list" href="{{ route('ExpertPersonal.ViewExpert',['Expert_ID' => $expert->Expert_ID]) }}">
                    <p> {{$expert->Expert_Name}} </p>
                    <p> {{$expert->Expert_University}} </p>
                    <p> {{$expert->Expert_ResearchField}} </p>
                </a>
            </div>
            <div class="card-content-2">
                <button type="button" name="edit" id="edit" class="btn btn-edit" style="margin: 0 0 0 0;"><a style="color: black;" href="{{ route('ExpertPersonal.EditExpert',['Expert_ID' => $expert->Expert_ID]) }}">EDIT</a></button>
                <button type="button" name="delete" id="delete" class="btn btn-delete" style="margin: 60px 20px 0 0;"><a style="color: black;" href="{{ route('ExpertPersonal.DeleteExpert',['Expert_ID' => $expert->Expert_ID]) }}">DELETE</button>
            </div>
        </div>
        @endforeach
        @endif

        @if(session('success'))
            <script>
                window.onload = function() {
                    alert("{{ session('success') }}");
                };
            </script>
        @endif
    </div>
</body>