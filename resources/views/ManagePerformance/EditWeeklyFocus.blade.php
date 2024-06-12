<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="content">
    <h4 class="page-title">Edit Weekly Focus</h4>
    <div class="focus-section">
        <form action="{{ route('weekly_focus.update', $weeklyFocus->WF_ID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="focus-content">
                <label for="WF_FocusInfo">Focus Info:</label>
                <input type="text" id="WF_FocusInfo" name="WF_FocusInfo" value="{{ $weeklyFocus->WF_FocusInfo }}" required>
            </div>
            <div class="focus-content">
                <label for="WF_AdminInfo">Admin Info:</label>
                <input type="text" id="WF_AdminInfo" name="WF_AdminInfo" value="{{ $weeklyFocus->WF_AdminInfo }}" required>
            </div>
            <div class="focus-content">
                <label for="WF_SocialInfo">Social Info:</label>
                <input type="text" id="WF_SocialInfo" name="WF_SocialInfo" value="{{ $weeklyFocus->WF_SocialInfo }}" required>
            </div>
            <div class="focus-content">
                <label for="WF_RecoveryInfo">Recovery Info:</label>
                <input type="text" id="WF_RecoveryInfo" name="WF_RecoveryInfo" value="{{ $weeklyFocus->WF_RecoveryInfo }}" required>
            </div>
            <button type="submit" class="save-btn">Update</button>
        </form>
    </div>
</div>
@endsection


</body>
</html>