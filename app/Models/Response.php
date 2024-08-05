<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the question that owns the response.
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Get the option that owns the response.
     */
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
