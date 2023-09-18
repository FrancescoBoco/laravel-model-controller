@extends('layouts.main')

@section('page-title', 'modifica'.$comic->title)

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col mb-4">
            <h1>
                Modifica {{ $comic->title }}
            </h1>
        </div>
        <div class="col ">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                {{-- questo token che laravel usa nel backend per assicurarsi che la richesta venga proprio dal sito  --}}
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="src" class="form-label">SRC</label>
                    <input type="text" class="form-control" id="src" name="src" placeholder="src" value="{{ $comic->src }}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-labe">title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                     name="title" placeholder="title"  value="{{ $comic->title }}" required>
                     @error('title')
                         <div class="alert alert-danger">
                            {{ $message }}
                         </div>
                     @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="series"  value="{{ $comic->series }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" 
                    id="price" name="price" placeholder="price"  value="{{ $comic->price }} {{ old('price') }}" required>

                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date"  value="{{ $comic->sale_date }}" required>
                </div>
 
                <button type="submit">
                    aggiorna 
                </button>
            </form>
        </div>
    </div>
</div>
{{-- non ho ID... devo chiedere --}}
{{-- {{ route('comics.show', ['comic' => $comic->$id]) }} --}}

@endsection
