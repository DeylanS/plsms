<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLATINUMSPHERE</title>

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
            <p><a class="side-nav-link" href="../NewExpertForm">NEW EXPERT</a> </p>
            <p><a class="side-nav-link" href="../ViewOwnExpertList">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewAllExpertList">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewReportOfExpert">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="{{ route('PublicationPersonal.NewPublicationForm') }}">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="{{ route('PublicationPersonal.ViewOwnPublicationList') }}">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="{{ route('PublicationAll.ViewPublicationList') }}">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="{{ route('crmp_profile.index') }}">CRMP PROFILE</a></p>
            <p><a class="side-nav-link" href="{{ route('manage_performance.home') }}">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="{{ route('report.generate') }}">REPORT</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>