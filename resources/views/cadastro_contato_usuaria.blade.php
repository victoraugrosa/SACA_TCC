@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white" id="card_header">{{ __('Cadastro de Contato') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contato.store') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ session('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" id= 'idUsuaria' name="idUsuaria" value="{{ session('id') }}"> 

                        <div class="form-group row">
                            <label for="ddd" class="col-md-4 col-form-label text-md-right">{{ __('DDD') }}</label>

                            <div class="col-md-6">
                                <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{ old('ddd') }}" required autocomplete="celular" autofocus>

                                @error('ddd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection