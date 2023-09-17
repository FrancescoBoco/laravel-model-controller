@extends('layouts.main')

@section('page-title', 'Index di Comic')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
  <div class="col my-4 ">
    <button type="button" class="w-100 btn btn-warning">
      <a href="{{ route('comics.create') }}"> Aggiungi alla lista  </a>
    </button>
            
  </div>
    <div class="row">
     
        @foreach ($comics as $comic)
        <div class="col col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <p class="card-text">{{ $comic->series }}</p>
                  <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Go somewhere</a>
                  <button type="button" class=" btn btn-warning">
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"> modifica  </a>
                  </button>
                  <form 
                    action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" 
                    class="mt-1"
                    method="POST"
                    onsubmit="return confirm('Questo elemento verrà cancellato');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn btn-danger">
                      elimina
                    </button>
                  </form>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
{{-- non ho ID... devo chiedere --}}
{{-- {{ route('comics.show', ['comic' => $comic->$id]) }} --}}

@endsection
