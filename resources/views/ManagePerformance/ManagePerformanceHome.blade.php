<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ManagePerformance</title>
    <link href="{{ asset('css/app.css') }}?v={{ time() }}" rel="stylesheet">
</head>
<body>
    <!-- resources/views/manage_performance.blade.php -->
    @extends('layouts.master')

    @section('content')
    <div class="Performancecontent">
        <h4>Manage Performance</h4>
        <div class="performance-section">
            <div class="performance-box">
                <h5>WEEKLY FOCUS</h5>
                <a href="{{ route('weekly_focus.store') }}"><button class="btn">ADD WEEKLY FOCUS</button></a>
                <a href="{{ route('weekly_focus.index') }}"><button class="btn">VIEW WEEKLY FOCUS</button></a>
            </div>
            <div class="performance-box">
                <h5>DRAFT THESIS</h5>
                <a href="{{ route('draft_thesis.store') }}"><button class="btn">ADD DRAFT THESIS</button></a>
                <a href="{{ route('draft_thesis.index') }}"><button class="btn">VIEW DRAFT THESIS</button></a>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>

