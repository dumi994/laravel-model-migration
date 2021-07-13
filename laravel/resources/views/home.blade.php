@extends('layout.app')

@section('content')
    @foreach($viaggi as $viaggio)
        <h1>{{$viaggio['compagnia']}}</h1>
        <h2>{{$viaggio['descrizione']}}</h2>
        <h3>Prezzo: {{$viaggio['prezzo']}} &euro;</h3>
    @endforeach
@endsection
