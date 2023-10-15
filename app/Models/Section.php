<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'available_start' => 'datetime',
        'available_stop' => 'datetime',
    ];

    public function evaluations(): HasMany
    {
        return $this->hasMany(Evaluation::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
