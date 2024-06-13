<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Draft Thesis</title>
    <style>
        .content {
            text-align: center;
            margin: 20px 0;
        }
        .list-container {
            overflow-x: auto;
            margin: 0 auto;
            width: 90%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: #fff;
            border-radius: 8px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f7f7f7;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .page-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .btn {
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            text-decoration: none;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-delete:hover, .btn-add:hover {
            opacity: 0.8;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="content">
    <h2 class="page-title">View Draft Thesis</h2>
    <div class="list-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('draft_thesis.create') }}" class="btn btn-add">Add New Draft Thesis</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Draft Number</th>
                    <th>Start Date</th>
                    <th>Complete Date</th>
                    <th>Pages Number</th>
                    <th>DDC</th>
                    <th>Preparation Days</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($draftTheses as $draftThesis)
                    <tr>
                        <td>{{ $draftThesis->id }}</td>
                        <td>{{ $draftThesis->dt_title }}</td>
                        <td>{{ $draftThesis->dt_draft_number }}</td>
                        <td>{{ $draftThesis->dt_start_date }}</td>
                        <td>{{ $draftThesis->dt_complete_date }}</td>
                        <td>{{ $draftThesis->dt_pages_number }}</td>
                        <td>{{ $draftThesis->dt_ddc }}</td>
                        <td>{{ $draftThesis->dt_prep_days }}</td>
                        <td>
                            <form action="{{ route('draft_thesis.destroy', $draftThesis->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this draft thesis?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

</body>
</html>
