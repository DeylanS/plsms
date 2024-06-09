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
    <h2 class="page-title">View Draft Theses</h2>
    <div class="list-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
                        <td>
                            <a href="{{ route('draft_thesis.edit', $draftThesis->id) }}">Edit</a>
                            <form action="{{ route('draft_thesis.destroy', $draftThesis->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
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