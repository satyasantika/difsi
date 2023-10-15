<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'time_start' => 'datetime',
        'time_stop' => 'datetime',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
