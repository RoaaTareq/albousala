<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryUser extends Model
{
    use HasFactory;
    protected $fillable = ['session_id', 'total_score']; // Add 'session_id' to the fillable property
}
