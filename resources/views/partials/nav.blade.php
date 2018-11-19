
@if (Route::has('login'))
	<div class="top-right links">
		@auth
			<a href="{{ url('/welcome') }}">Home</a>
		@else
			<a href="{{ route('login') }}">Log in!</a>

			@if (Route::has('register'))
				<a href="{{ route('register') }}">Registreer!</a>
			@endif
		@endauth
	</div>
@endif