@extends('layouts.master')

@section('content')
    <h1>This is the index page for post</h1>
    <a class="btn" href="{{ route('PublicationPersonal.NewPublicationForm') }}">Add Publication</a>

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
                            <td><a class="btn" href="{{ route('PublicationPersonal.ViewPublication', $publication->Publication_ID) }}">View</a><a class="btn" href="{{ route('PublicationPersonal.EditPublication', $publication->Publication_ID) }}">Edit</a></td>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </center>
    @endif
@endsection
