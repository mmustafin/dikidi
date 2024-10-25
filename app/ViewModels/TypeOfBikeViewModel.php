<?php

namespace App\ViewModels;

use App\Models\Bike;
use App\Models\TypeOfBike;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;
use Spatie\ViewModels\ViewModel;

class TypeOfBikeViewModel extends ViewModel
{
    public function types()
    {


        return TypeOfBike::withCount('bike', 'bikeDiscontinued')->get();
    }
}
