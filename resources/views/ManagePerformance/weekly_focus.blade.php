<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- resources/views/weekly_focus.blade.php -->
@extends('layouts.master')

@section('content')
<div class="content">
    <h4 class="page-title">New Weekly Focus</h4>
    <div class="focus-section">
        <form action="{{ route('weekly_focus.store') }}" method="POST">
            @csrf
            <div class="focus-block">
                <h5>FOCUS BLOCK</h5>
                <label for="wf_content">Content:</label>
                <input type="text" name="wf_content" placeholder="Enter focus" required>
                <label for="wf_start_date">Start Date:</label>
                <input type="date" name="wf_start_date" required>
                <label for="wf_end_date">End Date:</label>
                <input type="date" name="wf_end_date" required>
            </div>
            <div class="focus-block">
                <h5>ADMIN BLOCK</h5>
                <label for="wf_blocktype">Block Type:</label>
                <input type="text" name="wf_blocktype" placeholder="Enter admin task" required>
            </div>
            <div class="focus-block">
                <h5>SOCIAL BLOCK</h5>
                <label for="wf_feedback">Feedback:</label>
                <input type="text" name="wf_feedback" placeholder="Enter social task" required>
            </div>
            <div class="focus-block">
                <h5>RECOVERY BLOCK</h5>
                <label for="wf_feedback_date">Feedback Date:</label>
                <input type="date" name="wf_feedback_date" required>
            </div>
            <button type="submit" class="save-btn">SAVE</button>
        </form>
    </div>
</div>
@endsection


</body>
</html>