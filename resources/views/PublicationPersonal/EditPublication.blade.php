@extends('layouts.master')

@section('content')
<style>
    .center {
        margin: 50px auto; /* Add margin from the top and center horizontally */
        width: 100%; /* Ensure the container takes full width */
        display: flex; /* Use flexbox for centering */
        justify-content: center; /* Horizontally center */
    }
    
    .form-container {
        background-color: #FFD480; /* Use a slightly less bright gold color */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 70%; /* Make the container 70% of the width */
        margin-top: 0px; /* Add margin from the top */
        max-height: 80vh; /* Set maximum height */
    }
    
    /* Style for the table */
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px; /* Adjust as needed */
    }
    
    th, td {
        padding: 12px; /* Increase padding for cells */
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    /* Adjust input size */
    input[type="text"],
    select,
    input[type="date"] {
        font-size: 18pt;
        height: 50px; /* Keep the height */
        width: calc(100% - 24px); /* Fill the entire width of the container */
        box-sizing: border-box; /* Include padding and border in width */
    }
    
    button[type="submit"] {
        font-size: 18pt;
        height: 50px;
        width: 100%;
    }
</style>
<div class="center">
    <div class="form-container">
        <h1 style="text-align: center;">Edit Publication</h1>
        <form action="{{ route('PublicationPersonal.update', $publication->Publication_ID) }}" method="post"> 
            @csrf
            @method('PUT') <!-- Use PUT method for updating -->
            <table>
                <tr>
                    <td>Field:</td>
                    <td><input type="text" name="Publication_Field" value="{{ $publication->Publication_Field }}" required></td>
                </tr>
                <tr>
                    <td>Title:</td>
                    <td colspan="3"><input type="text" name="Publication_Title" value="{{ $publication->Publication_Title }}" required></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td colspan="3"><input type="date" name="Publication_Date" value="{{ $publication->Publication_Date }}" required></td>
                </tr>
                <tr>
                    <td>File URL:<br>(include https://)</td>
                    <td colspan="3"><input type="text" name="Publication_File" value="{{ $publication->Publication_File }}" pattern="https?://.+" required></td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td colspan="3"><input type="text" name="Publication_Author" value="{{ $publication->Publication_Author }}" required></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td colspan="3"><input type="text" name="Publication_Type" value="{{ $publication->Publication_Type }}" required></td>
                </tr>
                <tr>
                    <td colspan="4"><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection
