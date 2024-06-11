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
    <h2 class="page-title">Add Draft Thesis Feedback</h2>
    <div class="feedback-section">
        <form action="{{ route('draft_thesis_feedback.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="draft_id">Draft Thesis:</label>
                <select id="draft_id" name="draft_id">
                    @foreach($draftTheses as $draft)
                        <option value="{{ $draft->id }}">{{ $draft->dt_title }}</option>
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