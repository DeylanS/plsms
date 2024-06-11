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
    <h2 class="page-title">Add Weekly Focus Feedback</h2>
    <div class="feedback-section">
        <form action="{{ route('weekly_focus_feedback.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="focus_id">Weekly Focus:</label>
                <select id="focus_id" name="focus_id">
                    @foreach($weeklyFocuses as $focus)
                        <option value="{{ $focus->id }}">{{ $focus->WF_FocusInfo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" required></textarea>
            </div>
            <button type="submit" class="btn-save">Submit</button>
        </form>
    </div>
</div>
@endsection

</body>
</html>