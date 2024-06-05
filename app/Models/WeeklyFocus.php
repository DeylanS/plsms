<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    use HasFactory;

    protected $table = 'weekly_focus'; // Specify the table name

    protected $primaryKey = 'WF_ID';

    protected $fillable = [
        'WF_ID',
        'WF_Date',
        'WF_FocusInfo',
        'WF_AdminInfo',
        'WF_SocialInfo',
        'WF_RecoveryInfo',
        'WF_Feedback',
    ];
}
