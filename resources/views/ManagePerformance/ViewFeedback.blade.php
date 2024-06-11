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
    <h2 class="page-title">View Feedback</h2>
    <div class="feedback-section">
        <div class="feedback-content">
            <label for="feedback">Feedback:</label>
            <span>{{ $feedback->content }}</span>
        </div>
    </div>
</div>
@endsection

</body>
</html>