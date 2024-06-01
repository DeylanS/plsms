<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expert extends Model
{
    use HasFactory;

    protected $table = 'expert'; // Specify the table name

    protected $primaryKey = 'Expert_ID';

    protected $fillable = ['Expert_ID', 'Expert_Name', 'Expert_University', 'Expert_Email', 'Expert_PhoneNum', 'Expert_ResearchField', 'Expert_ResearchTitle'];


    public function expert_publication(): HasMany 
    {
        return $this->hasMany(Expert_Publication::class, 'Expert_ID', 'Expert_ID');
    }

}
