<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Expert</title>

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
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.NewExpertForm') }}">NEW EXPERT</a> </p>
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.ViewOwnExpertList') }}">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewAllExpertList') }}">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewReportOfExpert') }}">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="{{ route('PublicationPersonal.NewPublicationForm') }}">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="{{ route('PublicationPersonal.ViewOwnPublicationList') }}">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="{{ route('PublicationAll.ViewPublicationList') }}">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="{{ route('crmp_profile.index') }}">CRMP PROFILE</a></p>
            <p><a class="side-nav-link" href="{{ route('manage_performance.home') }}">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="{{ route('report.generate') }}">REPORT</a></p>
        </div>

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4 class="page-title">VIEW EXPERT</h4>

        <!-- <form method="POST"> -->
            <div class="form-new-expert">
                <div class="form-top">
                    <div class="form-expert-1">
                        <table class="view-expert-table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td> 
                                    {{ $expert->Expert_Name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Gender
                                </th>
                                <td> 
                                    {{ $expert->Expert_Gender }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    University
                                </th>
                                <td> 
                                    {{ $expert->Expert_University }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td> 
                                    {{ $expert->Expert_Email }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone Number
                                </th>
                                <td> 
                                    {{ $expert->Expert_PhoneNum }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Research Field
                                </th>
                                <td> 
                                    {{ $expert->Expert_ResearchField }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-expert-2">
                        <hr>
                        <h3>Publications</h3>
                        <br>
                        @foreach($expert->expert_publication as $index => $publication)
                        <h4>Research Publication {{ $index + 1 }}</h4>
                        <table class="view-expert-table">
                            <tr>
                                <th>
                                    Research Title
                                </th>
                                <td> 
                                    {{ $publication->EP_ResearchTitle }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Research Paper Title
                                </th>
                                <td> 
                                    {{ $publication->EP_PaperTitle }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Research Author
                                </th>
                                <td> 
                                    {{ $publication->EP_PaperAuthor }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Research Year
                                </th>
                                <td> 
                                    {{ $publication->EP_PaperYear }}
                                </td>
                            </tr>
                        </table>
                        <br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        <!-- </form> -->
    </div>
</body>
</html>