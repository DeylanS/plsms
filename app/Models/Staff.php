<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff'; // Specify the table name

    protected $primaryKey = 'Staff_ID';

    protected $fillable = [
        'Staff_ID', 
        'User_ID', 
        'Mentor_ID',
        'Staff_Position',
    ];
}
