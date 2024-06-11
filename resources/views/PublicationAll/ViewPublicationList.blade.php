@extends('layouts.master')

@section('content')
    <h1>This is the index page for post</h1>
    <a class="btn" href="{{ route('PublicationAll.ViewReportOfPublication') }}" target="_blank">View Report</a>


    <br><br>

    @if($publications->isEmpty())
        <p>No publications found.</p>
    @else
        <center>
            <div>
                <table border="1" width="80%">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($publications as $publication)
                        <tr>
                            <td>{{$publication->Publication_Title}}</td>
                            <td>{{$publication->Publication_Author}}</td>
                            <td><a class="btn" href="{{ route('PublicationAll.ViewPublicationDetails', $publication->Publication_ID) }}">View</a></td>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </center>
    @endif
@endsection
