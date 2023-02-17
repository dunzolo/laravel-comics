{{-- includiamo il layout nel quale inserisco il contenuto --}}
@extends('layouts.app')

{{-- vado in serire il contenuto delimitato da section --}}
@section('content')
<div id="comics">
    <div class="container">
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
    </div>
</div>
@endsection