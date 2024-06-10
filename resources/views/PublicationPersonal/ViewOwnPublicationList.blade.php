@extends('layouts.master')

@section('content')
<h1>This is the index page for post</h1>
<a class="btn" href="{{ route('PublicationPersonal.NewPublicationForm') }}">Add Publication</a>

<br>
<br>
@if($publications->isEmpty())
    <p>No publications found.</p>
@else
@foreach ($publications as $publication)
    <div>
    <table border="1" width=50%>
        <tr>
            <td>
                <h3>
                    {{$publication->Publication_Field}}
                </h3>
            </td>
            <td>
                <h4>
                    {{$publication->Publication_Title}}
                </h4>
            </td>
            <td>
                <h4>
                    {{$publication->Publication_File}}
                </h4>
            </td>
            <td>
                <h4>
                    {{$publication->Publication_Author}}
                </h4>
            </td>
            <td>
                <h4>
                    {{$publication->Publication_Type}}
                </h4>
            </td>
            <br>
        </tr>
    </div>
    <br>
    <br>
@endforeach
@endif
@endsection