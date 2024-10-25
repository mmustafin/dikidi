<?php

namespace App\ViewModels;

use AllowDynamicProperties;
use App\Models\Bike;
use App\Models\TypeOfBike;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

#[AllowDynamicProperties] class BikeViewModel extends ViewModel
{

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function bikes(): Collection
    {
        return Bike::query()->where('type_of_bike_id', $this->type)->get();
    }

}
