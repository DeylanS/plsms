<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ManagePerformance</title>
    <link href="{{ asset('css/app.css') }}?v={{ time() }}" rel="stylesheet">
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
            <p><a class="side-nav-link" href="#">PERSONAL</a></p>
            <p><a class="side-nav-link" href="#">LIST USER</a></p>
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

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="Performancecontent">
    <h4>Manage Performance</h4>
    <div class="performance-section">
        <div class="performance-box">
            <h5>WEEKLY FOCUS</h5>
            <a href="{{ route('weekly_focus.create') }}"><button class="btn">ADD WEEKLY FOCUS</button></a>
            <a href="{{ route('weekly_focus.index') }}"><button class="btn">VIEW WEEKLY FOCUS</button></a>
        </div>
        <div class="performance-box">
            <h5>DRAFT THESIS</h5>
            <a href="{{ route('draft_thesis.create') }}"><button class="btn">ADD DRAFT THESIS</button></a>
            <a href="{{ route('draft_thesis.index') }}"><button class="btn">VIEW DRAFT THESIS</button></a>
        </div>
    </div>
    </div>

</body>
</html>
