<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $primaryKey = 'Publication_ID';

    protected $fillable = [
        'Mentor_ID',
        'User_ID',
        'Publication_Field',
        'Publication_Title',
        'Publication_Date',
        'Publication_File',
        'Publication_Author',
        'Publication_Type'
    ];
}
