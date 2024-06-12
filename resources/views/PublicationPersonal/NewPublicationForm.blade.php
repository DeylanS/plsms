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
        <h1 style="text-align: center;">New Publication</h1>
        <form action="{{ route('PublicationPersonal.store') }}" method="post">
            @csrf
            <table>
                <input type="hidden" name="User_ID" value="1">
                <!-- Selection box for Mentor_ID -->
                <tr>
                    <td>Mentor:</td>
                    <td>
                        <select name="Mentor_ID" required>
                            @foreach($mentors as $mentor)
                                <option value="{{ $mentor->Mentor_ID }}">{{ $mentor->User_FullName }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Field:</td>
                    <td><input type="text" name="Publication_Field" required></td>
                </tr>
                <tr>
                    <td>Title:</td>
                    <td colspan="3"><input type="text" name="Publication_Title" required></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td colspan="3"><input type="date" name="Publication_Date" required></td>
                </tr>
                <tr>
                    <td>File URL:<br>(include https://)</td>
                    <td colspan="3"><input type="text" name="Publication_File" pattern="https?://.+" required></td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td colspan="3"><input type="text" name="Publication_Author" required></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td colspan="3"><input type="text" name="Publication_Type" required></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;"><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection
