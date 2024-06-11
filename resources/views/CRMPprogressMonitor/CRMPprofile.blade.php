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
    <h2 class="page-title">CRMP Profile</h2>
    <div class="profile-section">
        <div class="profile-content">
            <label for="name">Name:</label>
            <span>{{ $profile->name }}</span>
        </div>
        <div class="profile-content">
            <label for="details">Details:</label>
            <span>{{ $profile->details }}</span>
        </div>
    </div>
</div>
@endsection

</body>
</html>