@extends('layouts.main')
@section('content')
    <div class="container-lg" style="margin:0 auto;">
        <div class="row mt-5 ms-5">
            @if(isset($response['data']))
                @foreach ($response['data'] as $match)
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
                        <div class="card" style="width: 60rem;">
                            <div class="card-body">
                                <div class="card-title fs-5 fw-bold">
                                    <img style="width: 30px" src=" {{$match['teams']['home']['img']}}"
                                         alt="  {{$match['teams']['home']['name']}} "/>
                                    {{$match['teams']['home']['name']}} {{$match['scores']['home_score']}}
                                    -
                                    {{$match['scores']['away_score']}} {{$match['teams']['away']['name']}}
                                    <img style="width: 30px" src=" {{$match['teams']['away']['img']}}"
                                         alt="  {{$match['teams']['away']['name']}} "/>
                                </div>
                                <div class="card-text">{{$match['status_name']}}</div>
                                <div class="card-text fs-6 fw-lighter">{{$match['league']['name']}}
                                    - {{$match['league']['country_name']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">There are no matches today</h2>
            @endif
        </div>
    </div>
@endsection
