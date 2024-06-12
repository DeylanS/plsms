<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Draft Thesis</title>
    <style>
        .content {
            text-align: center;
        }
        .list-container {
            overflow-x: auto;
            margin: 0 auto;
            width: 90%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
        <br>
        <br>
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
                    <th>Preparation Days</th> <!-- Add this column -->
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
                        <td>{{ $draftThesis->dt_prep_days }}</td> <!-- Display preparation days -->
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
