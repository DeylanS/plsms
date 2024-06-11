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
    <h2 class="page-title">Search Platinum</h2>
    <div class="search-section">
        <form action="{{ route('platinum.search') }}" method="GET">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search" placeholder="Enter search term" required>
            </div>
            <button type="submit" class="btn-search">Search</button>
        </form>
    </div>
</div>
@endsection

</body>
</html>