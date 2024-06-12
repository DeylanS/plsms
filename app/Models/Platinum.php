<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platinum extends Model
{
    use HasFactory;

    protected $table = 'platinum'; // Specify the table name

    protected $primaryKey = 'Platinum_ID';

    protected $fillable = [
        'Platinum_ID', 
        'User_ID', 
        'Mentor_ID',
        'Platinum_Citizenship', 
        'Platinum_CurrentEduLevel', 
        'Platinum_EduField',
        'Platinum_EduInstitute	', 
        'Platinum_Occupation', 
        'Platinum_StudySponsorship',
        'Platinum_Program',
    ];

    // public function crmp()
    // {
    //     return $this->belongsTo(CRMP::class);
    // }
}
