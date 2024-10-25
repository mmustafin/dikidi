<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\ViewModels\BikeViewModel;
use App\ViewModels\TypeOfBikeViewModel;

class BikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): TypeOfBikeViewModel
    {
        return (new TypeOfBikeViewModel())->view('type_of_bike');
    }

    public function type($type): BikeViewModel
    {
        return (new BikeViewModel($type))->view('bike');
    }


}
