@extends('layout')

@section('content')




<form action="{{ route('trains.update', $train->id) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="city">Város neve: </label>
        <input type="text" name="city" id="city" value="{{ old('city', $train->city) }}">
        <label for="distance">Távolság: </label>
        <input type="number" name="distance" id="distance" value="{{ old('distance', $train->distance) }}">
        <label for="avgspeed">Átlagsebesség: </label>
        <input type="number" name="avgspeed" id="avgspeed" value="{{ old('avgspeed', $train->avgspeed) }}">
    </fieldset>
        <button type="submit" class="mentes">Mentés</button>
</form>

@endsection