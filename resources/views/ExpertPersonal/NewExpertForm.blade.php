<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Expert</title>

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

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4 class="page-title">NEW EXPERT</h4>

        <form method="POST">
            <div class="form-new-expert">
                <div class="form-top">
                    <div class="form-expert-1">
                        <table>
                            <tr>
                                <td>
                                    NAME
                                </td>
                                <td> 
                                    <textarea name="expertName" id="expertName"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    UNIVERSITY
                                </td>
                                <td> 
                                    <textarea name="expertUni" id="expertUni"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    EMAIL
                                </td>
                                <td> 
                                    <input type="text" name="expertEmail" id="expertEmail"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PHONE NUMBER
                                </td>
                                <td> 
                                    <input type="text" name="expertPhoneNum" id="expertPhoneNum"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH FIELD
                                </td>
                                <td> 
                                    <input type="text" name="expertRscField" id="expertRscField"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH TITLE
                                </td>
                                <td> 
                                    <input type="text" name="expertRscTitle" id="expertRscTitle"> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-expert-2">
                        <table>
                            <tr>
                                <td>
                                    RESEARCH PAPER
                                </td>
                                <td> 
                                    <textarea name="expertRscPaper" id="expertRscPaper"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH YEAR
                                </td>
                                <td> 
                                    <input type="number" name="expertRscYear" id="expertRscYear"> 
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <input type="file">
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <button type="submit" name="addPaper" id="addPaper">+ Add More Paper</button>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="content-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-submit">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>