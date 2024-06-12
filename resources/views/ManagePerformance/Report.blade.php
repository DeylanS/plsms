<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.master')

<div class="report-section">
    <h3>Monthly Draft Thesis Report</h3>
    <p>Select a month:</p>
    <form action="{{ route('report.generate') }}" method="GET">
        <select name="month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <!-- Add options for other months -->
        </select>
        <button type="submit">Generate Report</button>
    </form>

    @if ($draftTheses->isEmpty())
        <p>No draft theses found for the selected month.</p>
    @else
        <ul>
        @foreach ($draftTheses as $draftThesis)
            <li>
                <strong>Draft Number:</strong> {{ $draftThesis->draft_number }}<br>
                <strong>Title:</strong> {{ $draftThesis->title }}<br>
                <strong>Completion Date:</strong> {{ $draftThesis->completion_date }}<br>
                <strong>Page:</strong> {{ $draftThesis->page }}
            </li>
        @endforeach
        </ul>
    @endif

</div>

</body>
</html>