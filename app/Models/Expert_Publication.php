<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expert_Publication extends Model
{
    use HasFactory;

    protected $table = 'expert_publication'; // Specify the table name

    protected $primaryKey = 'EP_ID';

    protected $fillable = ['EP_ID', 'Expert_ID', 'EP_ResearchTitle', 'EP_PaperTitle', 'EP_PaperAuthor', 'EP_PaperYear', 'EP_PaperFile'];

    public function expert(): BelongsTo
    {
        return $this->belongsTo(Expert::class, 'Expert_ID');
    }
}
