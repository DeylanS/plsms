<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Platinum</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style>
        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #801f38;
            color: white;
            padding: 10px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .btn:hover {
            background-color: #ba2049;
        }

        .header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #ba2049;
            color: white;
        }

        .side-nav .side-nav-link:hover {
            text-decoration: underline;
        }

        .side-nav {
            width: 200px;
            padding: 20px;
            background-color: #ba2049;
            color: white;
            position: fixed;
            height: 100%;
        }

        .btn a {
            color: white;
            text-decoration: none;
        }

        .container {
            margin: 20px auto;
            margin-left: 500px; /* Adjusted for more space to the right */
            max-width: 800px;
            padding: 20px;
            background-color: #f06086;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .platinum-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile-entry {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-left: 10px; /* Move the profile-entry more to the right */
        }

        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile-info {
            flex-grow: 1;
        }

        .profile-info p {
            margin: 5px 0; /* Added margin for better spacing between lines */
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
            <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png" alt="Sphere">
        </div>
        <div class="header-right">
            <h3 class="mr-5 fw-500">CRMP</h3>
        </div>
    </div>

    <div class="side-nav">
        <div class="nav-profile">
            <br>
            <p class="menu-header"><strong> PROFILE </strong></p>
            <p><a class="side-nav-link" href="#">PERSONAL</a></p>
            <p><a class="side-nav-link" href="#">LIST USER</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> EXPERT DOMAIN </strong></p>
            <p><a class="side-nav-link" href="#">NEW EXPERT</a></p>
            <p><a class="side-nav-link" href="#">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="#">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="/CRMPprofile">CRMP PROFILE</a></p>
            <p><a class="side-nav-link" href="/ViewPlatinumList">MANAGE PLATINUM</a></p>
            <p><a class="side-nav-link" href="{{ route('report.generate') }}">REPORT</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg">LOG OUT</button>
    </div>

    <div class="container">
        <h1 class="page-title">Manage Platinum</h1>
        <div class="platinum-list">
            <!-- Example Profile Entry -->
            <div class="profile-entry">
                <img class="profile-pic" src="https://via.placeholder.com/60" alt="Profile Picture">
                <div class="profile-info">
                    <p><strong>Name:</strong><br>Abdul</p>
                    <p><strong>Platinum Package:</strong><br>Elite</p>
                    <p><strong>Institute:</strong><br>Universiti Malaysia Pahang</p>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-focus"><a href="/AddWeeklyFocusFeedback">Weekly Focus</a></button>
                    <button class="btn btn-thesis"><a href="/AddDraftThesisFeedback">Draft Thesis</a></button>
                </div>
            </div>
            <div class="profile-entry">
                <img class="profile-pic" src="https://via.placeholder.com/60" alt="Profile Picture">
                <div class="profile-info">
                    <p><strong>Name:</strong><br>Syahilla Binti Awang</p>
                    <p><strong>Platinum Package:</strong><br>Elite</p>
                    <p><strong>Institute:</strong><br>Universiti Teknologi Malaysia</p>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-focus"><a href="/AddWeeklyFocusFeedback">Weekly Focus</a></button>
                    <button class="btn btn-thesis"><a href="/AddDraftThesisFeedback">Draft Thesis</a></button>
                </div>
            </div>
            <div class="profile-entry">
                <img class="profile-pic" src="https://via.placeholder.com/60" alt="Profile Picture">
                <div class="profile-info">
                    <p><strong>Name:</strong><br>Anwar</p>
                    <p><strong>Platinum Package:</strong><br>Premier</p>
                    <p><strong>Institute:</strong><br>Universiti Malaysia Kelantan</p>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-focus"><a href="/AddWeeklyFocusFeedback">Weekly Focus</a></button>
                    <button class="btn btn-thesis"><a href="/AddDraftThesisFeedback">Draft Thesis</a></button>
                </div>
            </div>
            <!-- More Profile Entries can be added here -->
        </div>
    </div>
</body>
</html>
