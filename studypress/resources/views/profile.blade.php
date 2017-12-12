@extends('layouts.app')

@section('title', 'Profiel')

@section('content')
	<span class="ov-nummer">Ov-nummer: {{ Auth::user()->ov_nummer }}</span>
<div class="profile">

	<h3>Student Gegevens</h3>
<b>Naam:</b> {{ Auth::user()->name }} <br>
<b>Email:</b> {{ Auth::user()->email }} <br>
<b>Woonplaats:</b> {{ Auth::user()->woonplaats }} <br>
<b>Mobiele nummer:</b> {{ Auth::user()->telnummer }} <br>
<b>Cohort:</b> {{ Auth::user()->cohort }} <br>
<b>Klas:</b> {{  $klas[0]->name }} <br>


</div>
@endsection 