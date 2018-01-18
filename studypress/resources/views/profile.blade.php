@extends('layouts.app')

@section('title', 'Profiel')

@section('content')
	<span class="ov-nummer">Ov-nummer: {{ Auth::user()->ov_nummer }}</span>

	<h3>Student Gegevens</h3>
<b>Naam:</b> {{ Auth::user()->name }} <br>

<form  method="post" action="/profile/edit">
	<b>Email:</b>
	<input type="text" class="form-control" id="mail" name="mail" value="{{ Auth::user()->email }}" style="display:inline;"><br><button type="submit">submit</button>

	<input type="hidden" value="{{ Auth::user()->id }}" name="userid"></input>

	<b>Mobiele nummer:</b>
	<input type="text" class="form-control" id="name" name="tel" value="{{ Auth::user()->telnummer }}" style="display:inline;"><br>
</form>

<b>Woonplaats:</b> {{ Auth::user()->woonplaats }} <br>

<b>Cohort:</b> {{ Auth::user()->cohort }} <br>

<b>Klas:</b> {{  $klas[0]->name }} <br


@endsection 