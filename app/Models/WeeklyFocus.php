<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    protected $table = 'weekly_focus';
    protected $primaryKey = 'WF_ID'; // Change this to match your migration

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

