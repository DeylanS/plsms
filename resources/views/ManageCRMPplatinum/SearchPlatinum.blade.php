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
                    <option value="">Platinum Professorship</option>
                    <option value="">Platinum Premier</option>
                    <option value="">Platinum Elite</option>
                    <!-- Add package options here -->
                </select>
                <select name="field" class="form-control mr-2">
                    <option value="">Field</option>
                    <option value="">Computer Science</option>
                    <option value="">Literiture</option>
                    <option value="">Medical</option>
                    <!-- Add field options here -->
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <div class="search-results">
            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="profile-info">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsJZe9M4DjFb6i-qzwyujmzXHWHOay0Az0Zg&s" alt="Profile" class="rounded-circle">
                        <div class="profile-text">
                            <p>Abu bin Ali</p>
                            <p>Platinum Professorship</p>
                            <p>Cyber Security</p>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-success mr-2">View Profile</button>
                        <button class="btn btn-success">Appoint CRMP</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="profile-info">
                        <img src="data:image/png;base64,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" alt="Profile" class="rounded-circle">
                        <div class="profile-text">
                            <p>Syakilla Binti Muda</p>
                            <p>Platinum Professorship</p>
                            <p>Software Engineering</p>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-success mr-2">View Profile</button>
                        <button class="btn btn-success">Appoint CRMP</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="profile-info">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwHHphIl3ekYLUEVaIdU9m0P9JbzGNRk440g&s" alt="Profile" class="rounded-circle">
                        <div class="profile-text">
                            <p>Zainon Binti Chek</p>
                            <p>Platinum Professorship</p>
                            <p>Network Security</p>
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

    .side-nav .side-nav-link:hover {
        text-decoration: underline;
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