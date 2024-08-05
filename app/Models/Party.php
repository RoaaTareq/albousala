<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_parties', 'username', 'location', 'phone', 'about', 'image','total_score'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    
}

