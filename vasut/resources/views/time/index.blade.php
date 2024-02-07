@extends('layout')

@section('content')

<form action="{{ route('time.calculate') }}" method="post">
    @csrf
    <fieldset>
        <label for="city">Elsö Város neve: </label>
        <input type="text" name="city" id="city">
        <label for="city">Második Város neve: </label>
        <input type="text" name="city" id="city">
        <label for="distance">Távolság: </label>
        <input type="number" name="distance" id="distance">
        <label for="avgspeed">Átlagsebesség: </label>
        <input type="number" name="avgspeed" id="avgspeed">
    </fieldset>
    <button type="submit" id="Feltoltes">Számolás</button>
</form>

@endsection
