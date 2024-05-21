<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of Personal Expert Domain</title>

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
            <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="#">CRMP PROFILE</a> </p>
            <p><a class="side-nav-link" href="../ManagePerformanceHome">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="#">REPORT</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4>ALL EXPERT DOMAIN</h4>

        <div class="expert-search">
            <table class="expert-search-layout">
                <tr>
                    <td>
                        <p>SEARCH BY: </p>
                    </td>
                    <td>
                        <select class="expert-search-dd">
                            <option value="RsrchField">Research Field </option>
                            <option value="ExpertSrchName">Name</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" style="width:265%; margin-left:45px;" class="expert-search-input" name="expertSearch" id="expertSearch" placeholder="Search">
                    </td>
                    <td>
                        <button type="submit" name="submit" id="submit" class="btn btn-submit position-abs">SUBMIT</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="expert-search-result">
            <table>
                <tr>
                    <td>
                        <p>RESULT FOR: </p>
                    </td>
                    <td>
                        <p><strong> ? ? </strong></p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- looping -->
        <div class="card">
            <div class="card-content-1">
                <a class="link-expert-list" href="../ViewExpertDetails">
                    <p> NAME</p>
                    <p> UNIVERSITY </p>
                    <p> RESEARCH FIELD </p>
                </a>
            </div>
            <div class="card-content-2">
                <button type="button" name="view" id="view" class="btn btn-view"><a style="color: black;" href="../ViewExpertDetails">VIEW</a></button>
            </div>
        </div>
    </div>
</body>