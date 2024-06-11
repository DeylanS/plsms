<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    use HasFactory;

    protected $table = 'weekly_focus';

    protected $fillable = [
        'WF_Date', 'WF_CompleteDate', 'WF_FocusInfo', 'WF_AdminInfo', 'WF_SocialInfo', 'WF_RecoveryInfo'
    ];
}
