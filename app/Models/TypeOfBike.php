<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static withCount(string $string)
 */
class TypeOfBike extends Model
{
    /** @use HasFactory<\Database\Factories\TypeOfBikeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function bike(): HasMany
    {
        return $this->hasMany(Bike::class);
    }

    public function bikeDiscontinued(): HasMany
    {
        return $this->hasMany(Bike::class)->where('discontinued', 1);
    }


}
