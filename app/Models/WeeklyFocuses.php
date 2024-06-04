<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocuses extends Model
{
    use HasFactory;

    protected $fillable = [
        'wf_start_date',
        'wf_end_date',
        'wf_content',
        'wf_blocktype',
        'wf_feedback',
        'wf_feedback_date',
    ];
}
