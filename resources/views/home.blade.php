<!-- Per indicare che questa pagina utilizza il layout "layout.blade.php" dobbiamo importarlo usando la parola extends: -->
@extends('layouts.layout')

<!-- Sezione titolo della pagina: -->
@section('title')
    EX - Movies
@endsection


<!-- Sezione della pagina personalizzata chiamata "content" nel layout: -->
@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                {{-- In questo caso invece di inserire le variabili nel componente card ( <x-card>...</x-card> )
                    tramite i tag slot. Esempio:
                    <x-slot:title>{{ $movie['title'] }}</x-slot:title>
                    <x-slot:originalTitle>{{ $movie['original_title'] }}</x-slot:originalTitle>
                    ecc.
                    passo le variabili direttamente attraverso il costruttore (prima di questo ho passato gli argomenti
                    anche nel costruttore del componente nella directory: app/View/Components/Card.php): --}}
                <x-card
                    title="{{ $movie['title'] }}"
                    originalTitle="{{ $movie['original_title'] }}"
                    nationality="{{ $movie['nationality'] }}"
                    date="{{ $movie['date'] }}"
                    vote="{{ $movie['vote'] }}"
                />
            </div>
        @endforeach
    </div>
@endsection
