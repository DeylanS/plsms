@extends('layouts.master')

@section('content')
<h1>Create Publication</h1>

    <form action="{{ route('PublicationPersonal.store') }}" method="post">
        @csrf
        Field:
        <input type="hidden" name="Mentor_ID" value="1">
        <input type="hidden" name="User_ID" value="1">
        <input type="text" name="Publication_Field">
        @error('title')
            {{ $message }}
        @enderror
        <br>
        Title:
        <input type="text" name="Publication_Title">
        @error('content')
            {{ $message }}
        @enderror
        <br>
        Date:
        <input type="date" name="Publication_Date">
        @error('content')
            {{ $message }}
        @enderror
        <br>
        File:
        <input type="text" name="Publication_File">
        @error('content')
            {{ $message }}
        @enderror
        <br>
        Author:
        <input type="text" name="Publication_Author">
        @error('content')
            {{ $message }}
        @enderror
        <br>
        Type:
        <input type="text" name="Publication_Type">
        @error('content')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">submit</button>
    </form>
@endsection