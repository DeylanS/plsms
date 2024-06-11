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
    <h4 class="page-title">View Weekly Focus</h4>
    @if ($weeklyFocuses->isEmpty())
        <p>No weekly focus items found.</p>
    @else
        <div class="list-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Start Date</th>
                        <th>Complete Date</th>
                        <th>Focus Info</th>
                        <th>Admin Info</th>
                        <th>Social Info</th>
                        <th>Recovery Info</th>
                        <th>Feedback</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weeklyFocuses as $weeklyFocus)
                        <tr>
                            <td>{{ $weeklyFocus->id }}</td>
                            <td>{{ $weeklyFocus->WF_StartDate }}</td>
                            <td>{{ $weeklyFocus->WF_CompleteDate }}</td>
                            <td>{{ $weeklyFocus->WF_FocusInfo }}</td>
                            <td>{{ $weeklyFocus->WF_AdminInfo }}</td>
                            <td>{{ $weeklyFocus->WF_SocialInfo }}</td>
                            <td>{{ $weeklyFocus->WF_RecoveryInfo }}</td>
                            <td>{{ $weeklyFocus->WF_Feedback }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('weekly_focus.edit', $weeklyFocus->id) }}" class="edit-btn">Edit</a>
                                    <form action="{{ route('weekly_focus.destroy', $weeklyFocus->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
</body>
</html>
