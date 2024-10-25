<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bike extends Model
{
    /** @use HasFactory<\Database\Factories\BikeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'discontinued',
        'type_of_bikes_id'
    ];

    public function scopeDiscontinued(Builder $query): void
    {
        $query->where('discontinued', 1);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeOfBike::class);
    }
}
