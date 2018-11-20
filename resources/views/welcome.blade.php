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
	@if(\Auth::check())
	<div class="col-md-8 offset-md-2" style="background-color: red; color: white;">

		<table>
			<tbody>
				<?php $count = 0; ?>
				@foreach( Auth::user()->items as $item )
				<tr id="item{{ $item->id }}" class="content-justify-center">
					<td>{{ ++$count }}</td>
					<td>{{ $item->wish }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	@else
	<div class="mx-auto title m-b-md">
		<h2><strong><a href="{{ route('register') }}">Vertel</a></strong> Sinterklaas wie je bent voordat je je verlanglijstje maakt!</h2>
	@endif
	</div>
</div>
@endsection

@section('footer');
<script src="js/welcome.js"></script>
@endsection