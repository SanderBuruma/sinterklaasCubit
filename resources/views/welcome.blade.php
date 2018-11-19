@extends('layouts.main')
@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="title m-b-md">
				Sinterklaas
		</div>
		<h5>Verlanglijst</h5>
		@if(\Auth::check())
			<h6>Vertel Sinterklaas wie jij bent zodat hij weet wie jij bent wanneer hij langs komt.</h6>
		@else

		@endif
		<h3></h3>
	</div>
</div>
@endsection