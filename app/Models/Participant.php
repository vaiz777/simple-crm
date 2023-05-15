<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Participant extends Model
{
    use HasFactory;

    public function event(): HasMany
    {
        return $this->hasMany(related: Event::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(related: Employee::class);
    }
}
