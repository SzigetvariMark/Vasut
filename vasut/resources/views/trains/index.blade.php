@extends('layout')


@section('content')
<h1>Mentett Adatok:</h1>
@if(session('success'))
<div class = "alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach($trains as $train)
    <li>
        {{ $train->city }}
        <a href="{{ route('trains.edit', $train->id) }}" class="button">Szerkesztés</a>
        <form action="{{ route('trains.destroy', $train->id) }}" method="POST"> 
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection