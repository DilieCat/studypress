@extends('layouts.app')

@section('title', 'Homepagina')

@section('content')
    <p>{{ Auth::id() }}</p>
@endsection