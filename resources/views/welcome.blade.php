@extends('layouts.main')

@section('header')
<style>
h2 {
	color: white;
}
</style>
@endsection

@section('content')
<div class="row">
	@if(\Auth::check())
	<div class="col-md-8 offset-md-2">
		<div class="card">
			<img id="sinterklaas" src="/svg/sinterklaas.svg" height="320"/>
			<div class="card-header">{{ "Verlanglijst van ".Auth::user()->fname." ".Auth::user()->lname }}</div>
			<table class="table">
				<tbody id="wish-table">
					{{-- jquery.ajax here inserts wishes --}}
				</tbody>
				<tr id="new-wish-row" class="content-justify-center">
					<td id="wish-input-count"></td>
					<td><input type="text" id="new-wish"><input type="text" id="user-id" hidden value="{{ Auth::user()->id }}"></td>
					<td></td>
				</tr>
			</table>
		</div>

		<div class="card">
			<div class="card-header">
				<a class="slug-link" href="{{ $slug = route('verlanglijst.single', Auth::user()->slug) }}">{{ $slug }}</a>
			</div>
		</div>

	@else
	<div class="mx-auto title m-b-md">
		<h2><strong><a href="{{ route('register') }}">Vertel</a></strong> Sinterklaas wie je bent voordat je je verlanglijstje maakt!</h2>
	@endif
	</div>
</div>
{{ csrf_field() }}
@endsection

@section('footer');
<script src="js/welcome.js"></script>
@endsection