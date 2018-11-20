@extends('layouts.main')

@section('header')
<style>
h2 {
	max-width: 90%;
	margin: auto;
}
a {
	color: darkred;
}
a:hover,
a:focus {
	color: darkred;
}
table {
  font-size: 2rem;
}
input {
	border: unset;
	width: 100%;

}
td {
	border-top: none !important;
}
td:nth-child(2){
  border-bottom: solid 1px red;
}
.table tbody + tbody {
	border-top: none;
}
</style>
@endsection

@section('content')
<div class="row">
	@if(\Auth::check())
	<div class="col-md-8 offset-md-2">

		<table class="table">
			<tbody id="wish-table">
				{{--here is inserted jquery.ajax  --}}
			</tbody>
			<tr id="new-wish-row" class="content-justify-center">
				<td id="wish-input-count">{{ ++$count }} - </td>
				<td><input type="text" id="new-wish"><input type="text" id="user-id" hidden value="{{ Auth::user()->id }}"></td>
			</tr>
		</table>

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