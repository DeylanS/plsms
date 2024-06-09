<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftThesis extends Model
{
    use HasFactory;

    protected $table = 'draft_thesis'; // Singular form
    protected $primaryKey = 'id';

    protected $fillable = [
        'dt_title',
        'dt_draft_number',
        'dt_start_date',
        'dt_complete_date',
        'dt_prep_days',
        'dt_pages_number',
        'dt_ddc',
    ];
}


