<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function formItems(): HasMany
    {
        return $this->hasMany(FormItem::class);
    }

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
