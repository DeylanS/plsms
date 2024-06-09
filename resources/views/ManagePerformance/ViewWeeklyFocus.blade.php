<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/viewWeeklyFocus.blade.php -->

@extends('layouts.master')

@section('content')
<div class="content">
    <h4 class="page-title">View Weekly Focus</h4>
    <div class="focus-section">
        <!-- Display Weekly Focus details here -->
        <div class="focus-content">
            <label for="startDate">Start Date:</label>
            <span>{{ $weeklyFocus->WF_StartDate }}</span>
        </div>
        <div class="focus-content">
            <label for="completeDate">Complete Date:</label>
            <span>{{ $weeklyFocus->WF_CompleteDate }}</span>
        </div>
        <div class="focus-content">
            <label for="focusInfo">Focus Info:</label>
            <span>{{ $weeklyFocus->WF_FocusInfo }}</span>
        </div>
        <div class="focus-content">
            <label for="adminInfo">Admin Info:</label>
            <span>{{ $weeklyFocus->WF_AdminInfo }}</span>
        </div>
        <div class="focus-content">
            <label for="socialInfo">Social Info:</label>
            <span>{{ $weeklyFocus->WF_SocialInfo }}</span>
        </div>
        <div class="focus-content">
            <label for="recoveryInfo">Recovery Info:</label>
            <span>{{ $weeklyFocus->WF_RecoveryInfo }}</span>
        </div>
        <div class="focus-content">
            <label for="feedback">Feedback:</label>
            <span>{{ $weeklyFocus->WF_Feedback }}</span>
        </div>
    </div>
</div>
@endsection

</body>
</html>