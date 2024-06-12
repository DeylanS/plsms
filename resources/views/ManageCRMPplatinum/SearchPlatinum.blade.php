<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Platinum</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header">
            <div class="header-left">
                <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
                <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png">
            </div>
            <div class="header-right">
                <h3 class="mr-5 fw-500">STAFF</h3>
            </div>
        </div>

        <div class="side-nav">
            <div class="nav-profile">
                <br>
                <p class="menu-header"><strong> PROFILE </strong></p>
                <p><a class="side-nav-link" href="#">PERSONAL</a> <p>
                <p><a class="side-nav-link" href="#">LIST USER</a><p>
            </div>
            <div class="nav-progress-monitor">
                <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
                <p><a class="side-nav-link" href="/SearchPlatinum">MANAGE CRMP</a></p>
            </div>

            <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
        </div>
        <div class="container">
        <h2 class="page-title">Manage CRMP</h2>
        <div class="search-section">
            <form method="GET" class="form-inline">
                <input type="text" name="platinum_name" placeholder="Platinum Name" class="form-control mr-2">
                <select name="platinum_package" class="form-control mr-2">
                    <option value="">Platinum Package</option>
                    <!-- Add package options here -->
                </select>
                <select name="field" class="form-control mr-2">
                    <option value="">Field</option>
                    <!-- Add field options here -->
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <div class="search-results">
            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="profile-info">
                        <img src="https://via.placeholder.com/50" alt="Profile" class="rounded-circle">
                        <div class="profile-text">
                            <p>Zainal Bin Hassan</p>
                            <p>Platinum Professorship</p>
                            <p>Cyber Security</p>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-success mr-2">View Profile</button>
                        <button class="btn btn-success">Appoint CRMP</button>
                    </div>
                </li>
                <!-- Repeat this list item for more users -->
            </ul>
        </div>

        <button type="button" class="btn btn-success mt-3"><a href="/AssignCRMP">Assign to Platinum</a></button>
        </div>


    <style>

    .page-title{
        text-align:center;
    }

    .btn{
        background-color: #33de76;
    }

    .header{
        background-color: #3da867;
    }
    
    .side-nav{
        background-color: #3da867;
    }
    .container {
    margin: 20px auto;
    max-width: 800px;
    padding: 20px;
    background-color: #e0f7e9; /* Light green background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .search-section .form-inline {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-section .form-control {
        width: auto;
        margin-right: 10px;
    }

    .search-results .list-group-item {
        background-color: #fff; /* White background for list items */
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 8px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile-info {
        display: flex;
        align-items: center;
    }

    .profile-info img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .profile-text p {
        margin: 0;
        font-size: 0.9rem;
    }

    .action-buttons .btn {
        background-color: #28a745; /* Green background for buttons */
        border-color: #28a745;
        color: #fff;
    }

    .action-buttons .btn:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    </style>

</body>
</html>