<!DOCTYPE html>
<html>
<head>
    <title>Publications Report by Year</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .center {
            text-align: center;
        }
        /* Styles for the print view */
        @media print {
            .no-print {
                display: none;
            }
            body {
                margin: 0;
            }
            .center {
                margin: 0 auto;
            }
        }
    </style>
</head>
<script>
    // Function to automatically print the page after a delay
    window.onload = function() {
        setTimeout(function() {
            window.print();
        }, 2000); // 2000 milliseconds = 2 seconds
    };
</script>

<body>

    <h1>Publications by Year</h1>

    @if($reportData->isEmpty())
        <p class="center">No data available.</p>
    @else
        <table>
            <tr>
                <th>Year</th>
                <th>Number of Publications</th>
            </tr>
            @foreach ($reportData as $data)
                <tr>
                    <td>{{ $data->year }}</td>
                    <td>{{ $data->total }}</td>
                </tr>
            @endforeach
        </table>

        <!-- Canvas element for the pie chart with defined width and height -->
        <div class="center" style="max-width: 400px; margin: 20px auto;">
            <canvas id="publicationsPieChart" width="400" height="400"></canvas>
        </div>
    @endif

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- JavaScript to render the chart -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('publicationsPieChart').getContext('2d');

            var chartData = {
                labels: @json($reportData->pluck('year')),
                datasets: [{
                    data: @json($reportData->pluck('total')),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            var publicationsPieChart = new Chart(ctx, {
                type: 'pie',
                data: chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // This ensures the aspect ratio is maintained
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            enabled: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
