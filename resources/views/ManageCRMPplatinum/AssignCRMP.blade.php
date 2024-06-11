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
    <h2 class="page-title">Assign CRMP</h2>
    <div class="assign-section">
        <form action="{{ route('crmp.assign') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="platinum_id">Platinum:</label>
                <select id="platinum_id" name="platinum_id">
                    @foreach($platinums as $platinum)
                        <option value="{{ $platinum->id }}">{{ $platinum->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="crmp_id">CRMP:</label>
                <select id="crmp_id" name="crmp_id">
                    @foreach($crmps as $crmp)
                        <option value="{{ $crmp->id }}">{{ $crmp->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn-assign">Assign</button>
        </form>
    </div>
</div>
@endsection

</body>
</html>