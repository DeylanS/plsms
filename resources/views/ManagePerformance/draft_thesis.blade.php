<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/draft_thesis.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content">
    <h2 class="page-title">Draft Thesis</h2>
    <div class="form-container-adddraft">
        <form action="{{ route('draft_thesis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="dt_title">Thesis Title:</label>
                <input type="text" id="dt_title" name="dt_title" required>
            </div>
            <div class="form-group">
                <label for="dt_no">Draft Number:</label>
                <input type="number" id="dt_no" name="dt_no" required>
            </div>
            <div class="form-group">
                <label for="dt_start_date">Draft Start Date:</label>
                <input type="date" id="dt_start_date" name="dt_start_date" required>
            </div>
            <div class="form-group">
                <label for="dt_completion_date">Completion Date:</label>
                <input type="date" id="dt_completion_date" name="dt_completion_date" required>
            </div>
            <div class="form-group">
                <label for="dt_total_page">Thesis Page Number:</label>
                <input type="number" id="dt_total_page" name="dt_total_page" required>
            </div>
            <div class="form-group">
                <label for="dt_draft_cycle">Draft Declaration Cycle (DDC) Group:</label>
                <input type="text" id="dt_draft_cycle" name="dt_draft_cycle" required>
            </div>
            <div class="form-group">
                <label for="dt_feedback">Feedback:</label>
                <input type="text" id="dt_feedback" name="dt_feedback">
            </div>
            <div class="form-group">
                <label for="dt_feedback_date">Feedback Date:</label>
                <input type="date" id="dt_feedback_date" name="dt_feedback_date">
            </div>
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" id="file" name="file" required>
            </div>
            <button type="submit" class="btn-save-adddraft">SAVE</button>
        </form>
    </div>
</div>
@endsection

</body>
</html>