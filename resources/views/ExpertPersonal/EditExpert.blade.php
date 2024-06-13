<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Expert</title>

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
        <h4 class="page-title">EDIT EXPERT</h4>

        <form method="POST" action="{{ route('ExpertPersonal.UpdateExpert', ['Expert_ID' => $expert->Expert_ID]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-new-expert">
                <div class="form-top">
                    <div class="form-expert-1">
                        <table class="form-table">
                            <tr>
                                <td style="width: 20%;">
                                    Name
                                </td>
                                <td> 
                                    <input type="text" name="expertName" id="expertName"  value="{{ old('Expert_Name', $expert->Expert_Name) }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Gender
                                </td>
                                <td> 
                                    <input type="text" name="expertGender" id="expertGender"  value="{{ old('Expert_Gender', $expert->Expert_Gender) }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    University
                                </td>
                                <td> 
                                    <input type="text" name="expertUni" id="expertUni" value="{{ old('Expert_University', $expert->Expert_University) }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td> 
                                    <input type="text" name="expertEmail" id="expertEmail" value="{{ old('Expert_Email', $expert->Expert_Email) }}"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone Number
                                </td>
                                <td> 
                                    <input type="text" name="expertPhoneNum" id="expertPhoneNum" value="{{ old('Expert_PhoneNum', $expert->Expert_PhoneNum) }}"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Research Field
                                </td>
                                <td> 
                                    <input type="text" name="expertRscField" id="expertRscField" value="{{ old('Expert_ResearchField', $expert->Expert_ResearchField) }}"> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-expert-2">
                        <hr>
                        <h3>Publications</h3>
                        <br>
                        @foreach ($expert->expert_publication as $index => $publication)
                        <div class="form-expert-publication">
                            <h4>Research Publication {{ $index + 1 }}</h4>
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="publications[{{ $index }}][id]" value="{{ $publication->EP_ID }}">
                            <input type="text" name="publications[{{ $index }}][research]" placeholder="Research Title" class="form-ep-input" value="{{ old('publications.' . $index . '.year', $publication->EP_ResearchTitle) }}">
                            <!-- Paper title field -->
                            <input type="text" name="publications[{{ $index }}][paper]" placeholder="Research Paper Title" class="form-ep-input" value="{{ old('publications.' . $index . '.paper', $publication->EP_PaperTitle) }}">
                            <input type="text" name="publications[{{ $index }}][author]" placeholder="Research Paper Author" class="form-ep-input" value="{{ old('publications.' . $index . '.paper', $publication->EP_PaperAuthor) }}">
                            <!-- Year field -->
                            <input type="number" name="publications[{{ $index }}][year]" placeholder="Research Year" class="form-ep-input" value="{{ old('publications.' . $index . '.year', $publication->EP_PaperYear) }}">
                        </div>
                        @endforeach
                        <br><br>
                        <button type="button" name="addPaper" id="addPaper" class="btn btn-submit">+ Add More Paper</button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let publicationIndex = {{ count($expert->expert_publication) }};
                        //var publicationIndex = {{ count($expert->expert_publication) }};

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
                alert("Expert details has been updated successfully!");
            };
        </script>
        @endif
    </div>
</body>
</html>