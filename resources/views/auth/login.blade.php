@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar senha') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <h5 class="mb-5 ">Ou login com</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item m-t-10"><a href="/auth/facebook" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                        <p class="mt-5">Não tem uma conta? <a href="/cadastro">Cadastre-se agora!</a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
