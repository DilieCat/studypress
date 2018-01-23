@extends('layouts.app')

@section('title', 'Profiel')

@section('content')
	<span class="ov-nummer">Ov-nummer: {{ Auth::user()->ov_nummer }}</span>

	<h3>Student Gegevens</h3>

	<b>Naam:</b> {{ Auth::user()->name }} <br>
	<b>Woonplaats:</b>{{ Auth::user()->woonplaats }}<br>
	<b>Cohort:</b>{{ Auth::user()->cohort }}<br>
	<b>Klas:</b>{{  $klas[0]->name }}

	<form  method="post" action="/profile/edit">

		<b>Email:</b>
		<input type="email" class="form-control" id="name" name="mail" value="{{ Auth::user()->email }}" style="display:inline;"><br>

		<b>Mobiele nummer:</b>
		<input type="number" class="form-control" id="name" name="tel" value="{{ Auth::user()->telnummer }}" style="display:inline;"><br>

		<button class="waves-effect waves-light btn" type="submit">submit</button>

	</form>

@endsection 