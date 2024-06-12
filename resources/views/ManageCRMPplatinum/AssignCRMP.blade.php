<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLATINUMSPHERE</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #333;
            color: white;
        }
        .header-left, .header-right {
            display: flex;
            align-items: center;
        }
        .header-left img {
            margin-left: 10px;
            width: 40px;
            height: 40px;
        }
        .side-nav {
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .side-nav .menu-header {
            margin-top: 20px;
        }
        .side-nav-link {
            text-decoration: none;
            color: #333;
            display: block;
            margin: 10px 0;
        }
        .btn-logout {
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
        }
        .container {
            margin-left: 220px;
            padding: 20px;
        }
        .assign-section {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .assign-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .assign-table th, .assign-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .assign-table th {
            background-color: #4caf50;
            color: white;
        }
        .assign-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .assign-table tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-left">
            <h3 class="ml-5 fw-500">PLATINUMSPHERE</h3>
            <img class="img-sm" src="https://iconape.com/wp-content/png_logo_vector/sphere.png" alt="Logo">
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
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="{{ route('manage_performance.home') }}">MANAGE CRMP</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>
    
    <div class="container">
        <h2 class="page-title">Manage CRMP</h2>
        <div class="assign-section">
            <h3>Assign CRMP to Platinum</h3>
            <table class="assign-table">
                <thead>
                    <tr>
                        <th>Assigned</th>
                        <th>Platinum Name</th>
                        <th>Field of Study</th>
                        <th>CRMP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td>PLATINUM NAME</td>
                        <td>FIELD OF STUDY</td>
                        <td><button class="btn btn-secondary">CRMP</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>