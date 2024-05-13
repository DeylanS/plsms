<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expert Domain Report</title>

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
            <p><a class="side-nav-link" href="../ExpertForm">NEW EXPERT</a> </p>
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
            <p><a class="side-nav-link" href="#">NEW WEEKLY FOCUS</a></p>
            <p><a class="side-nav-link" href="#">LIST WEEKLY FOCUS</a></p>
            <p><a class="side-nav-link" href="#">DRAFT THESIS</a></p>
            <p><a class="side-nav-link" href="#">REPORT</a></p>
        </div>

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4>REPORT</h4>

        <div class="expert-report">
            <table class="expert-report-layout">
                <tr>
                    <td>
                        <p>REPORT BY: </p>
                    </td>
                    <td>
                        <select class="expert-month-dd">
                            <option value="RsrchMonth">Month</option>
                            <option value="January">January</option>
                        </select>
                    </td>
                    <td>
                        <select class="expert-year-dd">
                            <option value="RsrchYear"> Year </option>
                            <option value="2002">2002</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" name="submit" id="submit" class="btn btn-submit position-abs" style="margin-bottom: 50px;">SUBMIT</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="expert-report-result">
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
                <a class="link-expert-list" href="../ViewExpert">
                    <p> NAME</p>
                    <p> UNIVERSITY </p>
                    <p> RESEARCH FIELD </p>
                </a>
            </div>
        </div>
    </div>
</body>