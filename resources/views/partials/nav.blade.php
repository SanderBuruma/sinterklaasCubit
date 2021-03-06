<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}"><h3><img src="/svg/mijter.svg" height="32">  Sinterklaas Verlanglijst</h3></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">

			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item">
						<h3><a class="nav-link" href="{{ route('login') }}">{{ __('Log In!') }}</a></h3>
					</li>
					<li class="nav-item">
						@if (Route::has('register'))
							<h3><a class="nav-link" href="{{ route('register') }}">{{ __('Registreer!') }}</a></h3>
						@endif
					</li>
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->fname.' '.Auth::user()->lname }}<span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							<a class="" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								<h4>{{ __('Log Uit!') }}</h4>
							</a>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>