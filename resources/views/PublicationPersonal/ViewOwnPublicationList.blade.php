@extends('layouts.master')

@section('content')
<style>
    .center {
        margin: 50px auto; /* Add margin from the top and center horizontally */
        width: 100%; /* Ensure the container takes full width */
        display: flex; /* Use flexbox for centering */
        justify-content: center; /* Horizontally center */
    }
    
    .container {
        background-color: #FFD480; /* Use a slightly less bright gold color */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%; /* Make the container 80% of the width */
        margin-top: 0px; /* Add margin from the top */
        max-height: 80vh; /* Set maximum height */
    }
    
    /* Style for the table */
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px; /* Adjust as needed */
        border: 4px solid black; /* Add thick black border to the table */
        border-radius: 10px; /* Add rounding to the corners */
    }
    
    th, td {
        padding: 12px; /* Increase padding for cells */
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd; /* Add border to the right of each cell */
        background-color: white; /* Set background color of cells to white */
    }
    
    th {
        background-color: #FFA500; /* Add background color for table header */
    }
    
    tr:last-child td {
        border-bottom: none; /* Remove bottom border for last row */
    }
    
    .btns {
        margin-right: 10px; /* Add margin between buttons */
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        text-decoration: none;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 5px;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        text-decoration: none;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 5px;
    }
</style>
<div class="center">
    <div class="container">
        <h1 style="text-align: center;">Your Publications</h1>
        <a class="btns" href="{{ route('PublicationPersonal.NewPublicationForm') }}">Add Publication</a>
        
        <br><br>
        
        @if($publications->isEmpty())
        <p>No publications found.</p>
        @else
        <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            @foreach ($publications as $publication)
            <tr>
                <td>{{$publication->Publication_Title}}</td>
                <td>{{$publication->Publication_Author}}</td>
                <td>
                    <a class="btns" href="{{ route('PublicationPersonal.ViewPublication', $publication->Publication_ID) }}">View</a>
                    <a class="btns" href="{{ route('PublicationPersonal.EditPublication', $publication->Publication_ID) }}">Edit</a>
                    <form action="{{ route('PublicationPersonal.DeletePublication', $publication->Publication_ID) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this publication?')" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>
@endsection
