@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>MYSQL запрос</p>
                    <p><em>select `type_of_bikes`.*, (select count(*) from `bikes` where `type_of_bikes`.`id` = `bikes`.`type_of_bike_id`) as `bike_count`, (select count(*) from `bikes` where `type_of_bikes`.`id` = `bikes`.`type_of_bike_id` and `discontinued` = 1) as `bike_discontinued_count` from `type_of_bikes`</em></p>

                    <h2>Type of bike</h2>
                    <ul>
                        @foreach($types as $type)
                            <li>
                                <a href="{{ route('bikes.type', $type->id) }}" >{{ $type->name }}</a>
                                Всего {{ $type->bike_count }} мотоциклов, снято с производства {{ $type->bike_discontinued_count }}
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
