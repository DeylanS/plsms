<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Weekly Focus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .content {
            max-width: 1000px;
            margin: 20px auto; /* Center the content horizontally */
            margin-left: 200px; /* Adjusted margin to move more to the right */
            padding: 20px;
            border-radius: 8px;
        }
        .page-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .list-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Optional shadow for table */
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffc107; /* Light orange for header */
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #fff3cd; /* Lightest orange for alternate rows */
        }
        tr:hover {
            background-color: #ffeeba; /* Slightly darker yellow on hover */
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .edit-btn, .delete-button {
            background-color: #007bff;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
        }
        .delete-button {
            background-color: #dc3545;
        }
        .edit-btn:hover, .delete-button:hover {
            opacity: 0.9;
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
                                    <form action="{{ route('weekly_focus.destroy', ['id' => $weeklyFocus->WF_ID]) }}" method="POST">
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
