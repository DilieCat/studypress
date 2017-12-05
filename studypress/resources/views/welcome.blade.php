@extends('layouts.app')

@section('title', 'Homepagina')


@section('content')
    <p>{{ Auth::user()->name }}</p>
@endsection