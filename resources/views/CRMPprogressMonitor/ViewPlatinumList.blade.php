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
    <h2 class="page-title">View Platinum List</h2>
    <div class="list-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($platinumList as $platinum)
                    <tr>
                        <td>{{ $platinum->id }}</td>
                        <td>{{ $platinum->name }}</td>
                        <td>{{ $platinum->details }}</td>
                        <td>
                            <a href="{{ route('platinum.edit', $platinum->id) }}">Edit</a>
                            <form action="{{ route('platinum.destroy', $platinum->id) }}" method="POST" style="display:inline;">
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