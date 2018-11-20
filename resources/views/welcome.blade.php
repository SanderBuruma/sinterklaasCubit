@extends('layouts.main')

@section('header')
<style>
h2 {
	max-width: 90%;
	margin: auto;
}
a{
	color: darkred;
}
a:hover,
a:focus {
	color: darkred;
}
</style>
@endsection

@section('content')
<div class="row">
	<div class="mx-auto title m-b-md">
		@if(\Auth::check())
			
		@else
			<h2><strong><a href="{{ route('register') }}">Vertel</a></strong> Sinterklaas wie je bent voordat je je verlanglijstje maakt!</h2>
		@endif
	</div>
</div>
@endsection

@section('footer');
<script src="js/welcome.js"></script>
@endsection