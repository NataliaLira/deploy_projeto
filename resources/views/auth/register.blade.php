@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="container border rounded border-success p-4">

                    <div class="form-group row">

                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome') }}</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                        <div class="col-md-6">
                            <input id="birth" type="text" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" required autocomplete="birth">

                            @error('birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                        <div class="col-md-6">
                            <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" required autocomplete="zipcode">

                            @error('cep')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>

                        <div class="col-md-6">
                        <input id="number" type="number" class="form-control" @error('number') is-invalid @enderror" name="number" required autocomplete="number">

                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="complement" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                        <div class="col-md-6">
                            <input id="complement" type="text" class="form-control @error('complement') is-invalid @enderror" name="complement" required autocomplete="complement">

                            @error('complement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="neighborhood" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                        <div class="col-md-6">
                            <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" required autocomplete="neighborhood">

                            @error('neighborhood')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="estate" class="col-md-4 col-form-label text-md-right">{{ _('Estado') }}</label>
                        <div class="col-md-6">
                            <select id="estate" type="text" class="form-control @error('estate') is-invalid @enderror" name="estate" required autocomplete="estate">
                            <option selected>Selecione</option>
                            <option>...</option>
                            </select>
                            @error('estate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ _('Cidade') }}</label>
                        <div class="col-md-6">
                            <select id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city">
                            <option selected>Selecione</option>
                            <option>...</option>
                            </select>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Cadastrar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
