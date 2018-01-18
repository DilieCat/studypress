@extends('layouts.app')

@section('title', 'Leerling profiel bewerken')

@section('content')
<b>Naam:</b> {{$user[0]->name}}
@endsection 