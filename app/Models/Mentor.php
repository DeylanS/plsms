<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentor'; // Specify the table name

    protected $primaryKey = 'Mentor_ID';

    protected $fillable = [
        'Mentor_ID', 
        'User_ID',
        'Staff_Position',
    ];
}
