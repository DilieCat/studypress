@extends('layouts.app')

@section('title', 'Blok 2')

@section('content')

	<h3>Informatie over Blok 2</h3>
		<b>Startdatum:</b> {{ Auth::user()->name }} <br>
		<b>Einddatum</b> {{ Auth::user()->email }} <br>
		<b>Aantal behaalde studiepunten:</b> {{ Auth::user()->woonplaats }} <br>
		<b>Totaal te behalen studiepunten:</b> {{ Auth::user()->telnummer }} <br>

@endsection 	