{{-- includiamo il layout nel quale inserisco il contenuto --}}
@extends('layouts.app')

{{-- vado in serire il contenuto delimitato da section --}}
@section('content')
<div id="comics">
    <div class="container">
        <span class="top-label-light-blue">Current series</span>
        <div class="row">
            @foreach ($comics as $comic)
                {{-- tra parentesi quadre metto il nome del parametro con il relativo valore --}}
                <div class="card">
                    <div class="card-image">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="card-title">
                        <span>{{ $comic['title'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bottom-btn">
            <button class="btn-light-blue">Load more</button>
        </div>
    </div>
    @include('partials.comics-links')
</div>
@endsection