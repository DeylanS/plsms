@extends('layouts.master')

@section('content')
<style>
    .center {
        margin: 50px auto; /* Add margin from the top and center horizontally */
        width: 80%; /* Ensure the container takes full width */
        display: flex; /* Use flexbox for centering */
        justify-content: center; /* Horizontally center */
    }
    
    .container {
        background-color: #FFD480; /* Use a slightly less bright gold color */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-height: 80vh; /* Set maximum height */
        width: 90%; /* Increase the width of the container */
    }
    
    /* Style for the table */
    table {
        border-collapse: collapse;
        width: 100%; /* Set the width to 100% */
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
</style>
<div class="center">
    <div class="container">
        <h1 style="text-align: center;">{{ $publication->Publication_Title }}</h1>
        
        <table>
            <tr>
                <th style="padding: 8px; text-align: left;">Field:</th>
                <td style="padding: 8px;">{{ $publication->Publication_Field }}</td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">Title:</th>
                <td style="padding: 8px;">{{ $publication->Publication_Title }}</td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">Mentor:</th>
                <td style="padding: 8px;">{{ $publication->Mentor_Name }}</td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">Date:</th>
                <td style="padding: 8px;">{{ $publication->Publication_Date }}</td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">File:</th>
                <td style="padding: 8px;"><a href="{{ $publication->Publication_File }}" target="_blank">Click Here</a></td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">Author:</th>
                <td style="padding: 8px;">{{ $publication->Publication_Author }}</td>
            </tr>
            <tr>
                <th style="padding: 8px; text-align: left;">Type:</th>
                <td style="padding: 8px;">{{ $publication->Publication_Type }}</td>
            </tr>
        </table>
        
        <div style="text-align:center; margin-top:20px;">
            <a href="{{ route('PublicationPersonal.ViewOwnPublicationList') }}" class="btns">Back to Publications</a>
        </div>
    </div>
</div>
@endsection
