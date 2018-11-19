@extends('layouts.main')
@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="title m-b-md">
				Sinterklaas
		</div>
		@if(\Auth::check())
			
		@else
			<h6><strong><a href="{{ route('register') }}">Vertel </a></strong>Sinterklaas wie je bent voordat je je verlanglijstje maakt.</h6>
		@endif
		<h3></h3>
	</div>
</div>
@endsection