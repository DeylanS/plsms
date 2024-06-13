<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of All Expert Domain</title>

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
            <select id="user-type" class="user-type-select">
                <option value="default">Platinum</option>
                <option value="mentor">Mentor</option>
            </select>
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

        <button type="button" class="btn btn-logout btn-lg"> LOG OUT </button>
    </div>

    <div class="content">
        <h4 class="page-title">ALL EXPERT DOMAIN</h4>
        <div class="expert-search">
            <form method="GET" action="{{ route('ExpertAll.ViewAllExpertList') }}">
                <div class="expert-search-bar">
                    <input type="text" name="search" class="expert-search-input" placeholder="Search by expert name or research field" value="{{ request('search') }}">
                    <button type="submit" name="submit" id="submit" class="btn btn-submit">Search</button>
                </div>
            </form>
        </div>

        <div class="expert-search-result">
            <table>
                <tr>
                    <td>
                        <p>RESULT FOR: </p>
                    </td>
                    <td>
                        <p><strong> {{ request('search') }} </strong></p>
                    </td>
                </tr>
            </table>
        </div>

        
        <!-- looping -->
        @if($expert->isEmpty())
            <p>No expert found.</p>
        @else
        @foreach ($expert as $expert)
        <div class="card">
            <div class="card-content-1">
                <a class="link-expert-list">
                    <p> {{$expert->Expert_Name}} </p>
                    <p> {{$expert->Expert_University}} </p>
                    <p> {{$expert->Expert_ResearchField}} </p>
                </a>
            </div>
            <div class="card-content-2">
                <button type="button" name="view" id="view" class="btn btn-view"><a style="color: black;" href="{{ route('ExpertAll.ViewExpertDetails',['Expert_ID' => $expert->Expert_ID]) }}">VIEW</a></button>
            </div>
        </div>
        @endforeach
        @endif


    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const userTypeSelect = document.getElementById('user-type');
        const header = document.querySelector('.header');
        const sideNav = document.querySelector('.side-nav');
        const content = document.querySelector('.form-new-expert');
        const logout = document.querySelector('.btn-logout');
        const card = document.querySelector('.card');

        const sideNavContent = {
            default: `
                <div class="nav-profile">
                    <p class="menu-header"><strong> PROFILE </strong></p>
                    <p><a class="side-nav-link" href="#">PERSONAL</a></p>
                    <p><a class="side-nav-link" href="#">LIST USER</a></p>
                </div>
                <div class="nav-expert-domain">
                    <p class="menu-header"><strong> EXPERT DOMAIN </strong></p>
                    <p><a class="side-nav-link" href="{{ route('ExpertPersonal.NewExpertForm') }}">NEW EXPERT</a></p>
                    <p><a class="side-nav-link" href="{{ route('ExpertPersonal.ViewOwnExpertList') }}">LIST OWN EXPERT</a></p>
                    <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewAllExpertList') }}">LIST ALL EXPERT</a></p>
                    <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewReportOfExpert') }}">REPORT</a></p>
                </div>
                <div class="nav-publication">
                    <p class="menu-header"><strong> PUBLICATION </strong></p>
                    <p><a class="side-nav-link" href="#">NEW PUBLICATION</a></p>
                    <p><a class="side-nav-link" href="#">LIST OWN PUBLICATION</a></p>
                    <p><a class="side-nav-link" href="#">LIST ALL PUBLICATION</a></p>
                </div>
                <div class="nav-progress-monitor">
                    <p class="menu-header"><strong> PROGRESS MONITORING </strong></p>
                    <p><a class="side-nav-link" href="../CRMPprofile">CRMP PROFILE</a></p>
                    <p><a class="side-nav-link" href="../ManagePerformanceHome">MANAGE PERFORMANCE</a></p>
                    <p><a class="side-nav-link" href="../Report">REPORT</a></p>
                </div>
                <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
            `,
            mentor: `
                <div class="nav-profile">
                    <p class="menu-header"><strong> PROFILE </strong></p>
                    <p><a class="side-nav-link" href="#">MENTOR PERSONAL</a></p>
                    <p><a class="side-nav-link" href="#">MANAGE USERS</a></p>
                </div>
                <div class="nav-expert-domain">
                    <p class="menu-header"><strong> EXPERT DOMAIN </strong></p>
                    <p><a class="side-nav-link" href="{{ route('ExpertAll.ViewAllExpertList') }}">VIEW ALL EXPERTS</a></p>
                </div>
                <div class="nav-publication">
                    <p class="menu-header"><strong> PUBLICATION </strong></p>
                    <p><a class="side-nav-link" href="#">VIEW ALL PUBLICATIONS</a></p>
                    <p><a class="side-nav-link" href="#">REPORT</a></p>
                </div>
                <div class="nav-progress-monitor">
                    <p class="menu-header"><strong> ADMIN PROGRESS MONITORING </strong></p>
                    <p><a class="side-nav-link" href="#">CRMP PROFILE</a></p>
                    <p><a class="side-nav-link" href="#">WEEKLY FOCUS</a></p>
                    <p><a class="side-nav-link" href="#">DRAFT THESIS PERFORMANCE</a></p>
                </div>
                <button type="button" name="logout" id="logout" class="btn btn-logout btn-lg"> LOG OUT </button>
            `
        };

        userTypeSelect.addEventListener('change', () => {
            const selectedType = userTypeSelect.value;

            // Remove all previous classes related to user types
            header.classList.remove('default', 'mentor');
            sideNav.classList.remove('default', 'mentor');
            content.classList.remove('default', 'mentor');
            logout.classList.remove('default', 'mentor');
            card.classList.remove('default', 'mentor');

            // Add the new class based on the selected user type
            if (selectedType) {
                header.classList.add(selectedType);
                sideNav.classList.add(selectedType);
                content.classList.add(selectedType);
                logout.classList.add(selectedType);
                card.classList.add(selectedType);
                sideNav.innerHTML = sideNavContent[selectedType];
            } else {
                header.classList.add('default');
                sideNav.classList.add('default');
                content.classList.add('default');
                logout.classList.add('default');
                card.classList.add('default');
                sideNav.innerHTML = sideNavContent.default;
            }
        });
    });
    </script>
</body>