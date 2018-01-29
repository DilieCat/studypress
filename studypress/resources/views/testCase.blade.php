@extends('layouts.app')

@section('title', 'testCase')

@section('content')
Probeer er javascript code in te zetten:
(Dit is de beschermde form)
<form action="/test" method="POST">
	<input name='test1' type="text">
	<input type="submit">
	 {{ csrf_field() }}
</form>

@if ($boolean = true)
	{{$answer}}
	{{--Als je het bovenstaande wegcomment en het onderstaande uitcomment is de site vatbaar voor XSS scripts--}}
	{{--echo $answer; plaats hier php omheen.--}}
	{{-- Gebruik dit om te testen: <script>alert(document.cookie);</script> --}}
@endif

@endsection 	