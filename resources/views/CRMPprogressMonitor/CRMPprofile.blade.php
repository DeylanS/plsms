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
        <h2 class="page-title">CRMP's Profile</h2>
        <div class="profile-section">
            <img class="profile-picture" src="https://img.freepik.com/free-photo/portrait-expressive-young-man-wearing-formal-suit_273609-6942.jpg?size=626&ext=jpg&ga=GA1.1.1224184972.1715040000&semt=ais">
            <div class="profile-info">
                <div class="profile-left">
                    <p><strong>Name :</strong> Zainal Bin Hassan</p>
                    <p><strong>IC Number :</strong> 990711145645</p>
                    <p><strong>Phone Number :</strong> 01683793748</p>
                    <p><strong>Email :</strong> Zainal@gmail.com</p>
                    <p><strong>Citizenship :</strong> Malaysian</p>
                </div>
                <div class="profile-right">
                    <p><strong>Occupation :</strong> Lecturer</p>
                    <p><strong>Address :</strong> No. 23 Jalan Harmoni, Taman Bahagia, 47300 Petaling Jaya, Selangor, Malaysia.</p>
                    <p><strong>Gender :</strong> Male</p>
                    <p><strong>Religion :</strong> Islam</p>
                    <p><strong>Race :</strong> Malay</p>
                    <p><strong>Facebook :</strong> ZainalHassan</p>
                </div>
            </div>
            <div class="education-section">
                <h3>EDUCATION BACKGROUND</h3>
                <p><strong>Education Level :</strong> Doctor of Philosophy</p>
                <p><strong>Program :</strong> Cyber Security</p>
                <p><strong>Field of study :</strong> Computer Science</p>
                <p><strong>Institution :</strong> University Malaya</p>
                <p><strong>Research Interest :</strong> Artificial Intelligence</p>
            </div>
        </div>
    </div>
@endsection

</body>
</html>