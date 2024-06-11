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
        <form action="{{ route('weekly_focus.update', $weeklyFocus->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="focus-content">
                <label for="WF_StartDate">Start Date:</label>
                <input type="date" id="WF_StartDate" name="WF_StartDate" value="{{ old('WF_StartDate', $weeklyFocus->WF_StartDate) }}" required>
                @error('WF_StartDate')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="focus-content">
                <label for="WF_CompleteDate">Complete Date:</label>
                <input type="date" id="WF_CompleteDate" name="WF_CompleteDate" value="{{ old('WF_CompleteDate', $weeklyFocus->WF_CompleteDate) }}" required>
                @error('WF_CompleteDate')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="focus-one">
                <div class="focus-block">
                    <h5>FOCUS BLOCK</h5>
                    <label for="WF_FocusInfo">Content:</label>
                    <input type="text" id="WF_FocusInfo" name="WF_FocusInfo" value="{{ old('WF_FocusInfo', $weeklyFocus->WF_FocusInfo) }}" placeholder="Enter focus" required>
                    @error('WF_FocusInfo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="focus-block">
                    <h5>ADMIN BLOCK</h5>
                    <label for="WF_AdminInfo">Content:</label>
                    <input type="text" id="WF_AdminInfo" name="WF_AdminInfo" value="{{ old('WF_AdminInfo', $weeklyFocus->WF_AdminInfo) }}" placeholder="Enter admin task" required>
                    @error('WF_AdminInfo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="focus-two">
                <div class="focus-block">
                    <h5>SOCIAL BLOCK</h5>
                    <label for="WF_SocialInfo">Content:</label>
                    <input type="text" id="WF_SocialInfo" name="WF_SocialInfo" value="{{ old('WF_SocialInfo', $weeklyFocus->WF_SocialInfo) }}" placeholder="Enter social task" required>
                    @error('WF_SocialInfo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="focus-block">
                    <h5>RECOVERY BLOCK</h5>
                    <label for="WF_RecoveryInfo">Content:</label>
                    <input type="text" id="WF_RecoveryInfo" name="WF_RecoveryInfo" value="{{ old('WF_RecoveryInfo', $weeklyFocus->WF_RecoveryInfo) }}" placeholder="Enter recovery task" required>
                    @error('WF_RecoveryInfo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="save-btn">SAVE</button>
        </form>
    </div>
</div>
@endsection

</body>
</html>