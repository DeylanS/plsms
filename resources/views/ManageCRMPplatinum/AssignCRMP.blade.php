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
                <p><a class="side-nav-link" href="../SearchPlatinum#">MANAGE CRMP</a></p>
            </div>

            <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
        </div>

        <div class="container">
        <div class="manage-crmp">
        <h2>MANAGE CRMP</h2>
        <div class="assign-header">
            <div>NO</div>
            <div>PLATINUM NAME</div>
            <div>FIELD OF STUDY</div>
            <div>CRMP</div>
        </div>

        <div class="assign-item">
            <div>1</div>
            <div>Alex Johnson</div>
            <div>Data Science</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
        <div class="assign-item">
            <div>2</div>
            <div>Samantha Green</div>
            <div>Biotechnology</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
        <div class="assign-item">
            <div>3</div>
            <div>Michael Brown</div>
            <div>Environmental Science</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
        <div class="assign-item">
            <div>4</div>
            <div>Jessica Smith</div>
            <div>Artificial Intelligence</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
        <div class="assign-item">
            <div>5</div>
            <div>David Wilson</div>
            <div>Cognitive Neuroscience</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
        <div class="assign-item">
            <div>6</div>
            <div>Olivia Martinez</div>
            <div>Quantum Computing</div>
            <div>
                <select>
                    <option value="crmp1">Mr. Zainal</option>
                    <option value="crmp2">Ms. Sarah Tan</option>
                    <option value="crmp3">Dr. John Lee</option>
                </select>
            </div>
        </div>
            <button class="btn-assign">Assign to Platinum</button>
        </div>
        </div>

        <style>
        .btn{
            background-color: #33de76;
        }

        .side-nav .side-nav-link:hover {
            text-decoration: underline;
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

        .manage-crmp {
            display: flex;
            flex-direction: column;
        }

        .manage-crmp h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .manage-crmp .assign-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #97d8a9;
            border-radius: 8px;
            color: white;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .manage-crmp .assign-header div {
            flex: 1;
            text-align: center;
        }

        .manage-crmp .assign-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            align-items: center;
        }

        .manage-crmp .assign-item div {
            flex: 1;
            text-align: center;
        }

        .manage-crmp .assign-item select {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn-assign {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-assign:hover {
            background-color: #218838;
        }
        </style>

</body>
</html>