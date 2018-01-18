@extends('layouts.app')

@section('title', 'Leerlingen beheer')

@section('content')
     <table class="striped">
        <thead>
          <tr>
              <th>Naam</th>
              <th>Email</th>
              <th>Woonplaats</th>
              <th>Adres</th>
              <th>OV-nummer</th>
              <th>Cohort</th>
              <th>Telnummer</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
@foreach ($users as $user)
<tr>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td>{{$user->woonplaats}}</td>
	<td>{{$user->adres}}</td>
	<td>{{$user->ov_nummer}}</td>
	<td>{{$user->cohort}}</td>
	<td>{{$user->telnummer}}</td>
	<td><a href="/leerlingedit?userid={{$user->id}}"><i class="material-icons" role="presentation">edit</i></a></td>
</tr>
@endforeach
        </tbody>
      </table>
            
@endsection 