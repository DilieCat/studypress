@extends('layouts.app')

@section('title', 'Profiel')

@section('content')
<div class="profile">
	<h3 class="dilie-cat">Student Gegevens</h3>
Naam: {{ Auth::user()->name }} <br>
Email: {{ Auth::user()->email }} <br>
Woonplaats: {{ Auth::user()->woonplaats }} <br>
{{ $opleiding[0]->name }}
</div>
@endsection 