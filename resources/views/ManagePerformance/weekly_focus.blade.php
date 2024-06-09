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
                <div class="focus-content">
        <label for="WF_Date">Start Date:</label>
        <input type="date" name="WF_Date" required>
    </div>
    <div class="focus-content">
        <label for="WF_CompleteDate">Complete Date:</label>
        <input type="date" name="WF_CompleteDate" required>
    </div>
    <div class="focus-one">
        <div class="focus-block">
            <h5>FOCUS BLOCK</h5>
            <label for="WF_FocusInfo">Content:</label>
            <input type="text" name="WF_FocusInfo" placeholder="Enter focus" required>
        </div>
        <div class="focus-block">
            <h5>ADMIN BLOCK</h5>
            <label for="WF_AdminInfo">Content:</label>
            <input type="text" name="WF_AdminInfo" placeholder="Enter admin task" required>
        </div>
    </div>
    <div class="focus-two">
        <div class="focus-block">
            <h5>SOCIAL BLOCK</h5>
            <label for="WF_SocialInfo">Content:</label>
            <input type="text" name="WF_SocialInfo" placeholder="Enter social task" required>
        </div>
        <div class="focus-block">
            <h5>RECOVERY BLOCK</h5>
            <label for="WF_RecoveryInfo">Content:</label>
            <input type="text" name="WF_RecoryInfo" placeholder="Enter recovery task" required>
        </div>
    </div>
    <button type="submit" class="save-btn">SAVE</button>
            </form>

            @if(session('success'))
            <script>
                window.onload = function() {
                    alert("Weekly Focus saved successfully.");
                };
            </script>
            @endif
        </div>
    </div>
@endsection


</body>
</html>