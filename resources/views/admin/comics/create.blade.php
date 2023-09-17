@extends('layouts.main')

@section('page-title', 'Crea comic')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col mb-4">
            <h1>
                Crea comic
            </h1>
        </div>
        <div class="col ">
            <form action="{{ route('comics.store') }}" method="POST">
                {{-- questo token che laravel usa nel backend per assicurarsi che la richesta venga proprio dal sito  --}}
                @csrf

                <div class="mb-3">
                    <label for="src" class="form-label">SRC</label>
                    <input type="text" class="form-control" id="src" name="src" placeholder="src">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="series" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date" required>
                </div>
 
                <button type="submit">
                    Aggiungi
                </button>
            </form>
        </div>
    </div>
</div>
{{-- non ho ID... devo chiedere --}}
{{-- {{ route('comics.show', ['comic' => $comic->$id]) }} --}}

@endsection
