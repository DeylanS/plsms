<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="report-section">
        <h3>Monthly Draft Thesis Report</h3>
        <p>Select a month:</p>
        <form action="{{ route('report.generate') }}" method="GET" class="form-inline mb-3">
            <select name="month" class="form-control">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <button type="submit" class="btn btn-primary ml-2">Generate Report</button>
        </form>

        @if ($draftTheses->isEmpty())
            <p>No draft theses found for the selected month.</p>
        @else
            <ul class="list-group">
                @foreach ($draftTheses as $draftThesis)
                    <li class="list-group-item">
                        <strong>Draft Number:</strong> {{ $draftThesis->dt_draft_number }}<br>
                        <strong>Title:</strong> {{ $draftThesis->dt_title }}<br>
                        <strong>Completion Date:</strong> {{ $draftThesis->dt_complete_date }}<br>
                        <strong>Page:</strong> {{ $draftThesis->dt_pages_number }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<style>
    .container {
        margin: 20px auto;
        max-width: 800px;
    }
    .report-section {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-inline {
        display: flex;
        align-items: center;
    }
    .form-control {
        width: auto;
        margin-right: 10px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .list-group-item {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 5px;
        background-color: #fff;
    }
</style>
@endsection



</body>
</html>