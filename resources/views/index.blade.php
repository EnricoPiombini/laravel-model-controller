@extends('layouts.app')

@section('main_content')
    <div class="container">
        <div class="row gap-1">
            @foreach ($movies as $movie)
                <div class="col-2">
                    <div class="card h-100 ">
                        <h3>
                            {{ $movie['title'] }}
                        </h3>
                        <h4>
                            {{ $movie['original_title'] }}
                        </h4>
                        <p> {{ $movie['nationality'] }}</p>
                        <p>{{ $movie['date'] }} </p>
                        <p>{{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
