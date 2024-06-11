<!-- resources/views/publications/show.blade.php -->
@extends('layouts.master')

@section('content')
<h1>{{ $publication->Publication_Title }}</h1>

<table border="1" width=50%>
    <tr>
        <td>
            <h3>Field:</h3>
        </td>
        <td>
            <h4>{{ $publication->Publication_Field }}</h4>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Title:</h3>
        </td>
        <td>
            <h4>{{ $publication->Publication_Title }}</h4>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Date:</h3>
        </td>
        <td>
            <h4>{{ $publication->Publication_Date }}</h4>
        </td>
    </tr>
    <tr>
        <td>
            <h3>File:</h3>
        </td>
        <td>
            <h4><a href="{{ $publication->Publication_File }}">File</h4>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Author:</h3>
        </td>
        <td>
            <h4>{{ $publication->Publication_Author }}</h4>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Type:</h3>
        </td>
        <td>
            <h4>{{ $publication->Publication_Type }}</h4>
        </td>
    </tr>
</table>

<a href="{{ route('PublicationPersonal.ViewOwnPublicationList') }}" class="btn">Back to Publications</a>
@endsection
