<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platinum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'details', 'crmp_id'
    ];

    public function crmp()
    {
        return $this->belongsTo(CRMP::class);
    }
}
