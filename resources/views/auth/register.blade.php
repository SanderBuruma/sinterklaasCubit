@extends('layouts.main')

@section('title', "| Registreer!")

@section('header')
<style>
.container.register {
	margin-top: 2rem;
}
</style>
@endsection

@section('content')
<div class="container register">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<img id="sinterklaas" src="/svg/sinterklaas.svg" height="320"/>
				<div class="card-header">{{ __('Vertel Sinterklaas over jezelf!') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group row">
							<label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam:*') }}</label>

							<div class="col-md-6">
								<input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

								@if ($errors->has('fname'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('fname') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam:*') }}</label>

							<div class="col-md-6">
									<input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" autofocus>

									@if ($errors->has('lname'))
											<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('lname') }}</strong>
											</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Stad:*') }}</label>

							<div class="col-md-6">
									<input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" autofocus>

									@if ($errors->has('city'))
											<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('city') }}</strong>
											</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Leeftijd:*') }}</label>

							<div class="col-md-6">
									<input id="age" min="0" type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" autofocus>
									@if ($errors->has('age'))
											<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('age') }}</strong>
											</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="personality" class="col-md-4 col-form-label text-md-right">{{ __('Personaliteit:*') }}</label>

							<div class="col-md-6">
									<textarea id="personality" type="text" class="form-control{{ $errors->has('personality') ? ' is-invalid' : '' }}" name="personality" value="{{ old('personality') }}" autofocus></textarea>

									@if ($errors->has('personality'))
											<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('personality') }}</strong>
											</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Geslacht:*') }}</label>

							<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Jongen" checked>
										<label class="form-check-label" for="inlineRadio1">Jongen</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Meisje">
										<label class="form-check-label" for="inlineRadio2">Meisje</label>
									</div>

									@if ($errors->has('sex'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('sex') }}</strong>
										</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address:*') }}</label>

							<div class="col-md-6">
									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Paswoord:*') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Zelfde Paswoord:*') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary btn-block">
										{{ __('Vertel Sinterklaas!') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
