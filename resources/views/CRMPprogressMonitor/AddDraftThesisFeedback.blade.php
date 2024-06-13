<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Draft Thesis</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style>
        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #801f38;
            color: white;
            padding: 10px 20px;
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

        .side-nav {
            width: 200px;
            padding: 20px;
            background-color: #ba2049;
            color: white;
            position: fixed;
            height: 100%;
        }

        .container {
            margin: 20px auto;
            margin-left: 350px; /* Adjusted for centering with side-nav */
            max-width: 1000px;
            padding: 20px;
            background-color: #f06086;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .list-container {
            overflow-x: auto; /* Add horizontal scroll if needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #801f38;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .alert-success {
            color: green;
            padding: 10px;
            border: 1px solid green;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #801f38;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ba2049;
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
        <h4 class="page-title">View Draft Thesis</h4>
        <div class="list-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Draft Number</th>
                        <th>Start Date</th>
                        <th>Complete Date</th>
                        <th>Pages Number</th>
                        <th>DDC</th>
                        <th>Preparation Days</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Machine Learning</td>
                        <td>2</td>
                        <td>3/6/2024</td>
                        <td>1/7/2024</td>
                        <td>67</td>
                        <td>28</td>
                        <td>28</td>
                        <td>
                            <form method="POST" action="">
                                @csrf
                                <input type="text" name="dt_feedback" placeholder="Enter Feedback"> <br>
                                <input type="submit" name="submit" value="Submit">
                            </form>
                        </td>
                    </tr>
                    <!-- More table rows can be added here -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
