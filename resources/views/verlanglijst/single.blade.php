@extends('layouts.main')

@section('header')
<style>
</style>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<div class="card">
			<img id="sinterklaas" src="/svg/sinterklaas.svg" height="320"/>
			<div class="card-header">{{ "Verlanglijst van $user->fname $user->lname" }}</div>
				<table class="table">
					<tbody>
						<?php $count = 0 ?>
						@foreach($user->items as $item)
						<tr>
							<td>{{ ++$count }}</td>
							<td>{{ $item->wish }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
	</div>
</div>
{{ csrf_field() }}
@endsection

@section('footer');
@endsection