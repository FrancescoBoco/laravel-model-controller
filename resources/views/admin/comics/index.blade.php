@extends('layouts.main')

@section('page-title', 'Index di Comic')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->src }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <p class="card-text">{{ $comic->series }}</p>
                  <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
{{-- non ho ID... devo chiedere --}}
{{-- {{ route('comics.show', ['comic' => $comic->$id]) }} --}}
<div class="gatto"></div>

<img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt="">
@endsection
