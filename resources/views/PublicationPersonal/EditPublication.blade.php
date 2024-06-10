@extends('layouts.master')

@section('content')
<style>
    .center {
        margin: 0 auto;
        /* This will horizontally center the element */
        width: fit-content;
        /* Adjust the width as per the content */
    }
</style>
    <h1>Edit Publication</h1>
    <div class="center">
        <form action="{{ route('PublicationPersonal.update', $publication->Publication_ID) }}" method="post"> 

            @csrf
            @method('PUT') <!-- Use PUT method for updating -->
            <table>
                <tr>
                    <td>Field:</td>
                    <td><input type="text" name="Publication_Field" value="{{ $publication->Publication_Field }}" style="font-size: 18pt; height: 40px; width:280px;"></td>
                </tr>
                <tr>
                    <td>Title:</td>
                    <td colspan="3"><input type="text" name="Publication_Title" value="{{ $publication->Publication_Title }}" style="font-size: 18pt; height: 40px; width:280px;"></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td colspan="3"><input type="date" name="Publication_Date" value="{{ $publication->Publication_Date }}" style="width:280px;"></td>
                </tr>
                <tr>
                    <td>File URL:<br>(include https://)</td>
                    <td colspan="3"><input type="text" name="Publication_File" value="{{ $publication->Publication_File }}" style="font-size: 18pt; height: 40px; width:280px;"></td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td colspan="3"><input type="text" name="Publication_Author" value="{{ $publication->Publication_Author }}" style="font-size: 18pt; height: 40px; width:280px;"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td colspan="3"><input type="text" name="Publication_Type" value="{{ $publication->Publication_Type }}" style="font-size: 18pt; height: 40px; width:280px;"></td>
                </tr>
                <tr>
                    <td colspan="4"><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
    </div>
@endsection
