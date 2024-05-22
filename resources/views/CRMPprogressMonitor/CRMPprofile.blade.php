<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRMP Profile</title>
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
        <div class="nav-expert-domain">
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

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h2 class="page-title">CRMP's Profile</h2>
        <div class="profile-section">
            <img class="profile-picture" src="https://img.freepik.com/free-photo/portrait-expressive-young-man-wearing-formal-suit_273609-6942.jpg?size=626&ext=jpg&ga=GA1.1.1224184972.1715040000&semt=ais">
            <div class="profile-info">
                <div class="profile-left">
                    <p><strong>Name :</strong> Zainal Bin Hassan</p>
                    <p><strong>IC Number :</strong> 990711145645</p>
                    <p><strong>Phone Number :</strong> 01683793748</p>
                    <p><strong>Email :</strong> Zainal@gmail.com</p>
                    <p><strong>Citizenship :</strong> Malaysian</p>
                </div>
                <div class="profile-right">
                    <p><strong>Occupation :</strong> Lecturer</p>
                    <p><strong>Address :</strong> No. 23 Jalan Harmoni, Taman Bahagia, 47300 Petaling Jaya, Selangor, Malaysia.</p>
                    <p><strong>Gender :</strong> Male</p>
                    <p><strong>Religion :</strong> Islam</p>
                    <p><strong>Race :</strong> Malay</p>
                    <p><strong>Facebook :</strong> ZainalHassan</p>
                </div>
            </div>
            <div class="education-section">
                <h3>EDUCATION BACKGROUND</h3>
                <p><strong>Education Level :</strong> Doctor of Philosophy</p>
                <p><strong>Program :</strong> Cyber Security</p>
                <p><strong>Field of study :</strong> Computer Science</p>
                <p><strong>Institution :</strong> University Malaya</p>
                <p><strong>Research Interest :</strong> Artificial Intelligence</p>
            </div>
        </div>
    </div>
</body>
</html>
