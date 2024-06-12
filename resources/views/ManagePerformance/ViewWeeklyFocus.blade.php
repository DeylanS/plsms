<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Weekly Focus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .content {
            max-width: 1000px;
            margin: 0 auto;
        }
        .page-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .list-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .edit-btn, .delete-button {
            background-color: #007bff;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-button {
            background-color: #dc3545;
        }
        .edit-btn:hover, .delete-button:hover {
            opacity: 0.8;
        }
        .delete-button {
            padding: 6px 10px;
        }
        form {
            display: inline;
        }
    </style>
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
                            <td>{{ $weeklyFocus->WF_ID }}</td>
                            <td>{{ $weeklyFocus->WF_StartDate }}</td>
                            <td>{{ $weeklyFocus->WF_CompleteDate }}</td>
                            <td>{{ $weeklyFocus->WF_FocusInfo }}</td>
                            <td>{{ $weeklyFocus->WF_AdminInfo }}</td>
                            <td>{{ $weeklyFocus->WF_SocialInfo }}</td>
                            <td>{{ $weeklyFocus->WF_RecoveryInfo }}</td>
                            <td>{{ $weeklyFocus->WF_Feedback }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('weekly_focus.edit', ['id' => $weeklyFocus->WF_ID]) }}" class="edit-btn">Edit</a>
                                    <form action="{{ route('weekly_focus.destroy', ['id' => $weeklyFocus->WF_ID]) }}" method="POST" style="display:inline;">
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
