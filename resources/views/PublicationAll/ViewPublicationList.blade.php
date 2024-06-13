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
</style>
<div id="customDialog" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 2px solid black; border-radius: 10px;">
    <p>Are you a mentor?</p>
    <button onclick="proceed()">Yes</button>
    <button onclick="cancel()">No</button>
</div>

<script>
    function confirmMentor() {
        // Show the custom dialog box
        document.getElementById('customDialog').style.display = 'block';
    }

    function proceed() {
        // If user clicks Yes, proceed to the report page
        window.open("{{ route('PublicationAll.ViewReportOfPublication') }}", "_blank");
        // Hide the custom dialog box
        document.getElementById('customDialog').style.display = 'none';
    }

    function cancel() {
        // If user clicks No, hide the custom dialog box
        document.getElementById('customDialog').style.display = 'none';
        // Display the message
        alert("Platinums and staff are not allowed.");
    }
</script>
<div class="center">
    <div class="container">
        <h1 style="text-align: center;">All Publications</h1>
        <form action="{{ route('PublicationAll.SearchPublications') }}" method="GET" style="text-align: center;">
            <input type="text" name="search" placeholder="Search by title..." value="{{ request('search') }}" style="padding: 10px; width: 50%; border-radius: 5px; border: 1px solid #ddd;">
            <button type="submit" class="btns">Search</button>
        </form>
        <br>
        <a class="btns" href="#" onclick="confirmMentor()">View Report</a>
        
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
                <td><a class="btns" href="{{ route('PublicationAll.ViewPublicationDetails', $publication->Publication_ID) }}" >View</a></td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>
@endsection
