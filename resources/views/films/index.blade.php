@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($films as $film)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $film->poster }}" class="card-img-top" alt="{{ $film->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p class="card-text">{{ Str::limit($film->description, 100) }}</p>
                        <a href="{{ route('films.show', $film->slug) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
