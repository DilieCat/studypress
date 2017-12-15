@extends('layouts.app')

@section('title', 'Blok')

@section('content')

	<h3>Selecteer een blok voor meer informatie</h3>
<a class="waves-effect waves-light btn-large" href="{{ url('/block1') }}">Blok 1</a>
<a class="waves-effect waves-light btn-large" href="{{ url('/block2') }}">Blok 2</a>
<a class="waves-effect waves-light btn-large" href="{{ url('/block3') }}">Blok 3</a>
<a class="waves-effect waves-light btn-large" href="{{ url('/block4') }}">Blok 4</a>

@endsection 	