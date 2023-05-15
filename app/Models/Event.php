<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    public function employee(): HasMany
    {
        return $this->hasMany(related: Employee::class);
    }

    public function participant(): HasMany
    {
        return $this->hasMany(related: Participant::class);
    }
}
