<?php

namespace App\Models;

use App\Models\Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }

    public function participant(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
