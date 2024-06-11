<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Draft Thesis</title>
    <style>
        .content {
            text-align: center;
        }
        .form-container-adddraft {
            width: 50%;
            margin: 0 auto;
            text-align: left;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn-save-adddraft {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn-save-adddraft:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="content">
    <h2 class="page-title">Create Draft Thesis</h2>
    <div class="form-container-adddraft">
        <form action="{{ route('draft_thesis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="dt_title">Thesis Title:</label>
                <input type="text" id="dt_title" name="dt_title" value="{{ old('dt_title') }}" required>
                @error('dt_title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dt_draft_number">Draft Number:</label>
                <input type="number" id="dt_draft_number" name="dt_draft_number" value="{{ old('dt_draft_number') }}" required>
                @error('dt_draft_number')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dt_start_date">Draft Start Date:</label>
                <input type="date" id="dt_start_date" name="dt_start_date" value="{{ old('dt_start_date') }}" required>
                @error('dt_start_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dt_complete_date">Completion Date:</label>
                <input type="date" id="dt_complete_date" name="dt_complete_date" value="{{ old('dt_complete_date') }}" required>
                @error('dt_complete_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <!-- No need to input preparation days manually -->
            <div class="form-group" style="display:none;">
                <label for="dt_prep_days">Preparation Days:</label>
                <input type="number" id="dt_prep_days" name="dt_prep_days" value="{{ old('dt_prep_days') }}" readonly>
                @error('dt_prep_days')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dt_pages_number">Thesis Page Number:</label>
                <input type="number" id="dt_pages_number" name="dt_pages_number" value="{{ old('dt_pages_number') }}" required>
                @error('dt_pages_number')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dt_ddc">Draft Declaration Cycle (DDC) Group:</label>
                <input type="text" id="dt_ddc" name="dt_ddc" value="{{ old('dt_ddc') }}" required>
                @error('dt_ddc')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn-save-adddraft">SAVE</button>
        </form>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const completionDateInput = document.getElementById('dt_complete_date');
        const preparationDaysInput = document.getElementById('dt_prep_days');

        completionDateInput.addEventListener('change', () => {
            // Assume previous completion date is available
            const previousCompletionDate = '{{ $previousCompleteDate ?? '' }}';
            if (previousCompletionDate) {
                const previousDate = new Date(previousCompletionDate);
                const currentDate = new Date(completionDateInput.value);
                let prepDays = 0;
                let date = new Date(previousDate);

                while (date < currentDate) {
                    date.setDate(date.getDate() + 1);
                    if (date.getDay() !== 0) { // Exclude Sundays
                        prepDays++;
                    }
                }
                preparationDaysInput.value = prepDays;
            } else {
                preparationDaysInput.value = 0; // Default value if no previous date
            }
        });
    });
</script>

</body>
</html>
