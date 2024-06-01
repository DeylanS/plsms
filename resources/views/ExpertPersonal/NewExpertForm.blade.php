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
                        <table>
                            <tr>
                                <td>
                                    NAME
                                </td>
                                <td> 
                                    <input type="text" name="expertName" id="expertName">
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    UNIVERSITY
                                </td>
                                <td> 
                                    <input type="text" name="expertUni" id="expertUni">
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    EMAIL
                                </td>
                                <td> 
                                    <input type="text" name="expertEmail" id="expertEmail"> 
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PHONE NUMBER
                                </td>
                                <td> 
                                    <input type="text" name="expertPhoneNum" id="expertPhoneNum"> 
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH FIELD
                                </td>
                                <td> 
                                    <input type="text" name="expertRscField" id="expertRscField"> 
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH TITLE
                                </td>
                                <td> 
                                    <input type="text" name="expertRscTitle" id="expertRscTitle"> 
                                    @error('content')
                                        {{ $message }}
                                    @enderror
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-expert-2">
                        <h4>Publications</h4>
                        <div class="publication">
                            <textarea name="publications[0][paper]" placeholder="Research Paper Title"></textarea>
                            <input type="number" name="publications[0][year]" placeholder="Research Year">
                            <!-- <input type="file" name="publications[0][file]"> -->
                        </div>
                        <button type="button" name="addPaper" id="addPaper" class="btn btn-submit">+ Add More Paper</button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let publicationIndex = 1;

                        document.getElementById('addPaper').addEventListener('click', function() {
                            const publicationDiv = document.createElement('div');
                            publicationDiv.className = 'publication';
                            publicationDiv.innerHTML = `
                                <textarea name="publications[${publicationIndex}][paper]" placeholder="Research Paper Title"></textarea>
                                <input type="number" name="publications[${publicationIndex}][year]" placeholder="Research Year">
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