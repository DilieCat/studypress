@extends('layouts.app')

@section('title', 'Leerling profiel bewerken')

@section('content')
  <div class="row">
    <form action="{{  route('leerlingupdate', $user[0]->id)  }}" method='POST' class="col s12">
      	<div class="row">
	        <div class="input-field col s12">
	          <input value="{{$user[0]->name}}" id="name" name="name" type="text">
	          <label for="name">Naam</label>
	        </div>
		        <div class="input-field col s12">
		          <input value="{{$user[0]->email}}" id="email" name="email" type="email">
		          <label for="email">Email</label>
		        </div>
			        <div class="input-field col s12">
			          <input value="{{$user[0]->woonplaats}}" id="woonplaats" name="woonplaats" type="text">
			          <label for="woonplaats">Woonplaats</label>
			        </div>
		        <div class="input-field col s12">
		          <input value="{{$user[0]->adres}}" id="adres" name="adres" type="text">
		          <label for="adres">Adres</label>
		        </div>
	       	<div class="input-field col s12">
	          <input value="{{$user[0]->telnummer}}" id="telnummer" name="telnummer" type="text">
	          <label for="telnummer">Telefoonnummer</label>
	        </div>

	 {{ csrf_field() }}
  	{{ method_field('PUT') }}﻿
  	<input type="hidden" name="_method" value="PUT">
	<input  class="waves-effect waves-light btn" type="submit" value="Bewerk">
        </div>
    </form>
  </div>

@endsection 