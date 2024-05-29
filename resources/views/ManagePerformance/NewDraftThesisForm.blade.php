<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Draft Thesis</title>
    <link href="{{ asset('css/app.css') }}?v={{ time() }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
            <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png">
        </div>
        <div class="header-right">
            <h3 class="mr-5 fw-500">ALI</h3>
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
            <p><a class="side-nav-link" href="../NewExpertForm">NEW EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewOwnExpertList">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewAllExpertList">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="../ViewReportOfExpert">REPORT</a></p>
        </div>
        <div class="nav-publication-data">
            <p class="menu-header"><strong> PUBLICATION DATA </strong></p>
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

        <button type="button" name="logout" id="logout" class="btn-logout-adddraft btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h2 class="page-title-adddraft">Draft Thesis</h2>
        <div class="form-container-adddraft">
            <form action="{{ route('ManagePerformance.saveDraftThesis') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group-adddraft">
                    <label for="thesis_title">Thesis Title:</label>
                    <input type="text" id="thesis_title" name="thesis_title" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="draft_number">Draft Number:</label>
                    <input type="number" id="draft_number" name="draft_number" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="draft_state_date">Draft State Date:</label>
                    <input type="date" id="draft_state_date" name="draft_state_date" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="completion_date">Completion Date:</label>
                    <input type="date" id="completion_date" name="completion_date" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="thesis_page_number">Thesis Page Number:</label>
                    <input type="number" id="thesis_page_number" name="thesis_page_number" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="ddc_group">Draft Declaration Cycle (DDC) Group:</label>
                    <input type="text" id="ddc_group" name="ddc_group" required>
                </div>
                <div class="form-group-adddraft">
                    <label for="file">File:</label>
                    <input type="file" id="file" name="file" required>
                </div>
                <button type="submit" class="btn-save-adddraft">SAVE</button>
            </form>
        </div>
    </div>
</body>
</html>


