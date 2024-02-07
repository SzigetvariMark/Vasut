@extends('layout')

@section('content')

<h1>Adja meg a Város nevét Távolságát és Átlagsebességét:</h1>

<form action="{{ route('trains.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="city">Város neve: </label>
        <input type="text" name="city" id="city">
        <label for="distance">Távolság: </label>
        <input type="number" name="distance" id="distance">
        <label for="avgspeed">Átlagsebesség: </label>
        <input type="number" name="avgspeed" id="avgspeed">
    </fieldset>
    <button type="submit" id="Feltoltes">Feltöltés Adatbázisba</button>
</form>

@endsection