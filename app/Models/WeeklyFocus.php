<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    use HasFactory;

    protected $fillable = [
        'WF_StartDate',
        'WF_CompleteDate',
        'WF_FocusInfo',
        'WF_AdminInfo',
        'WF_SocialInfo',
        'WF_RecoveryInfo',
        'WF_Feedback',
    ];
}


