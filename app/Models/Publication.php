<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'Publication_Field',
            'Publication_Title',
            'Publication_File',
            'Publication_Author',
            'Publication_Type'
    ];
}
