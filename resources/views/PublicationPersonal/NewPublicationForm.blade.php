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
<h1>Create Publication</h1>
<div class="center">
    <form action="{{ route('PublicationPersonal.store') }}" method="post">
        @csrf
        <table>
        <input type="hidden" name="Mentor_ID" value="1">
        <input type="hidden" name="User_ID" value="1">
            <tr>
                <td>Field:</td>
                <td><input type="text" name="Publication_Field" style="font-size: 18pt; height: 40px; width:280px;"></td>
            </tr>
            <tr>
                <td>Title:</td>
                <td colspan="3"><input type="text" name="Publication_Title" style="font-size: 18pt; height: 40px; width:280px;"></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td colspan="3"><input type="date" name="Publication_Date" style="width:280px;"></td>
            </tr>
            <tr>
                <td>File URL:<br>(include https://)</td>
                <td colspan="3"><input type="text" name="Publication_File" style="font-size: 18pt; height: 40px; width:280px;"></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td colspan="3"><input type="text" name="Publication_Author" style="font-size: 18pt; height: 40px; width:280px;"></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td colspan="3"><input type="text" name="Publication_Type" style="font-size: 18pt; height: 40px; width:280px;"></td>
            </tr>
            <tr>
                <centre><td colspan="4"><button type="submit">Submit</button></td></centre>
            </tr>
        </table>
    </form>
</div>
@endsection