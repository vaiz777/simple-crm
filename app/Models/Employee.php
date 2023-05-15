<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    public function event(): HasMany
    {
        return $this->hasMany(related: Event::class);
    }

    public function participant(): HasOne
    {
        return $this->hasOne(related: Participant::class);
    }
}
