@extends('layouts.main')

@section('main-content')

@section('page-title', $comic->title)

{{-- @section('page-title')
Homepage
@endsection --}}




<div class="container">
<div class="row">
    
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->src }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->series }}</p>
                <p class="card-text">{{ $comic->price }}</p>
                <p class="card-text">Sale date {{ $comic->sale_date }}</p>
            </div>
        </div>
    </div>
</div>