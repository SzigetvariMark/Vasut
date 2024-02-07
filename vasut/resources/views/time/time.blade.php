@extends('layout')

@section('content')

@if(isset($time))
    <p>Megtett távolság alapján az utazás időtartama: {{ $time }} óra</p>
@else
    <p>Valami hiba történt az idő kiszámítása közben.</p>
@endif

@endsection