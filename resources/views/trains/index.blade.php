@extends('layouts.app')
@section('title', 'treni in partenza')
@section('content')
    <div class="container">
        @foreach ($trains as $train)
            <ul>
                <li>Azienda: {{ $train->azineda }}</li>
                <li>Stazione di Partenza: {{ $train->stazione_partenza }} ore: {{ $train->orario_partenza }}</li>
                <li>Stazione d'arrivo: {{ $train->stazione_arrivo }} ore:{{ $train->orario_arrivo }}</li>
            </ul>
        @endforeach


    </div>
@endsection
