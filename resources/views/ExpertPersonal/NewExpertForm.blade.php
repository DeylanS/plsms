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
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.NewExpertForm') }}">NEW EXPERT</a> </p>
            <p><a class="side-nav-link" href="{{ route('ExpertPersonal.ViewOwnExpertList') }}">LIST OWN EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewAllExpertList') }}">LIST ALL EXPERT</a></p>
            <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewReportOfExpert') }}">REPORT</a></p>
        </div>
        <div class="nav-expert-domain">
            <p class="menu-header"><strong> PUBLICATION </strong></p>
            <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p> 
            <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
            <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
        </div>
        <div class="nav-progress-monitor">
            <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
            <p><a class="side-nav-link" href="../CRMPprofile">CRMP PROFILE</a> </p>
            <p><a class="side-nav-link" href="../ManagePerformanceHome">MANAGE PERFORMANCE</a></p>
            <p><a class="side-nav-link" href="../Report">REPORT</a></p>
        </div>

        <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4 class="page-title">NEW EXPERT</h4>

        <form method="POST" action="{{ route('expert.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-new-expert">
                <div class="form-top">
                    <div class="form-expert-1">
                        <table class="form-table">
                            <tr>
                                <td style="width: 20%;">
                                    Name
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertName" id="expertName">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">
                                    Gender
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertGender" id="expertGender" placeholder="Male / Female">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    University
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertUni" id="expertUni">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertEmail" id="expertEmail">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone Number
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertPhoneNum" id="expertPhoneNum">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Research Field
                                </td>
                                <td class="form-column"> 
                                    <input type="text" name="expertRscField" id="expertRscField">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-expert-2">
                        <hr>
                        <h3>Publications</h3>
                        <br>
                        <div class="form-expert-publication">
                            <h4>Research Publication 1</h4>
                            <input type="text" name="publications[0][research]" placeholder="Research Title" class="form-ep-input"> 
                            <input type="text" name="publications[0][paper]" placeholder="Research Paper Title" class="form-ep-input">
                            <input type="text" name="publications[0][author]" placeholder="Research Paper Author" class="form-ep-input">
                            <input type="number" name="publications[0][year]" placeholder="Research Year" class="form-ep-input">
                            <!-- <input type="file" name="publications[0][file]"> -->
                        </div>
                        <br><br>
                        <button type="button" name="addPaper" id="addPaper" class="btn btn-submit">+ Add More Paper</button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let publicationIndex = 1;

                        document.getElementById('addPaper').addEventListener('click', function() {
                            const publicationDiv = document.createElement('div');
                            publicationDiv.className = 'form-expert-publication';
                            publicationDiv.innerHTML = `
                                <br><br><br>
                                <h4>Research Publication ${publicationIndex + 1}</h4>
                                <input type="text" name="publications[${publicationIndex}][research]" placeholder="Research Title" class="form-ep-input"> 
                                <input type="text" name="publications[${publicationIndex}][paper]" placeholder="Research Paper Title" class="form-ep-input">
                                <input type="text" name="publications[${publicationIndex}][author]" placeholder="Research Paper Author" class="form-ep-input">
                                <input type="number" name="publications[${publicationIndex}][year]" placeholder="Research Year" class="form-ep-input">
                                <!-- <input type="file" name="publications[${publicationIndex}][file]"> -->
                            `;
                            document.querySelector('.form-expert-2').appendChild(publicationDiv);
                            publicationIndex++;
                        });
                    });
                </script>

                <div class="content-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-submit">SUBMIT</button>
                </div>
            </div>
        </form>
        

        @if(session('success'))
        <script>
            window.onload = function() {
                alert("New expert has been successfully added!");
            };
        </script>
        @endif
    </div>
</body>
</html>