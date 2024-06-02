<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expert Domain Report</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <h4 class="page-title">REPORT</h4>

        <div class="expert-report">
            <form method="GET" action="{{ route('ExpertAll.ViewReportOfExpert') }}">
                <div class="expert-report-select">
                    <select name="month" class="expert-month-dd" style="width: 50%; padding: 5px 10px; border-radius: 5px; margin: 0 10px;">
                        <option value="RsrchMonth" {{ request('month') == 'RsrchMonth' ? 'selected' : '' }}>Month</option>
                        @foreach (range(1, 12) as $m)
                            <option value="{{ date('F', mktime(0, 0, 0, $m, 1)) }}" {{ request('month') == date('F', mktime(0, 0, 0, $m, 1)) ? 'selected' : '' }}>
                                {{ date('F', mktime(0, 0, 0, $m, 1)) }}
                            </option>
                        @endforeach
                    </select>
                    <select name="year" class="expert-year-dd" style="width: 50%; padding: 5px 10px; border-radius: 5px; margin: 0 10px;">
                        <option value="RsrchYear" {{ request('year') == 'RsrchYear' ? 'selected' : '' }}> Year </option>
                        @foreach (range(date('Y'), 1900) as $y)
                            <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>{{ $y }}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" name="search" class="expert-search-input" placeholder="Search by expert name or research field" value="{{ request('search') }}"> -->
                    <button type="submit" name="submit" id="submit" class="btn btn-submit" style="margin: 0 10px;">Search</button>
                </div>
            </form>
        </div>

        <div class="expert-report-result">
            @if(request('month') || request('year'))
            <table style="margin: 0 10px;">
                <tr>
                    <td>
                        <p>RESULT FOR: </p>
                    </td>
                    <td>
                        <p><strong> Month: {{ request('month') == 'RsrchMonth' ? 'All' : request('month') }} | Year: {{ request('year') == 'RsrchYear' ? 'All' : request('year') }}  </strong></p>
                    </td>
                </tr>
            </table>
            @endif
        </div>

        <!-- Looping -->
        @if($expert->isEmpty())
            <p>No expert found.</p>
        @else
        <div class="card">
            <div class="card-content-1">
                <a class="link-expert-list">
                    <table class="report-expert-trend">
                        <tr>
                            <th style="padding-right: 50px;">Expert Name</th>
                            <th>Research Field</th>
                        </tr>
                        @foreach ($expert as $expert)
                        <tr>
                            <td>{{ $expert->Expert_Name }}</td>
                            <td>{{ $expert->Expert_ResearchField }}</td>
                        </tr>
                        @endforeach
                    </table>
                </a>
            </div>
            

            <!-- Pie Chart -->
            <div style="position: absolute; right:0; margin-right: 70px;">
                <canvas id="researchFieldPieChart"></canvas>
            </div>
        </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('researchFieldPieChart').getContext('2d');
            var researchFields = @json($researchFields);
            var data = {
                labels: Object.keys(researchFields),
                datasets: [{
                    data: Object.values(researchFields),
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                        // Add more colors as needed
                    ]
                }]
            };

            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    title: {
                        display: true,
                        text: 'Percentage of Experts in Each Research Field'
                    }
                }
            });
        });
    </script>
</body>