@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white" id="card_header">{{ __('Cadastros Iniciais') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('formulario.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome"  type="text" class="form-control @error('name') is-invalid @enderror" name="nome" required autocomplete="nome" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="form-group row">
                            <label for="CPF" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="CPF" type="number" class="form-control @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="CPF" autofocus>

                                @error('CPF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nasc" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="data_nasc" type="date" class="form-control @error('data_nasc') is-invalid @enderror" name="data_nasc" value="{{ old('data_nasc') }}" required autocomplete="data_nasc" autofocus>

                                @error('data_nasc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Raça') }}</label>

                            <div class="col-md-6">
                                <select id="raca" class="form-control @error('raca') is-invalid @enderror" name="raca" value="" required autocomplete="raca">
                                    <option value="1">Negra</option>
                                    <option value="2">Amarela</option>
                                    <option value="3">Branca</option>
                                    <option value="4">Índigena</option>
                                </select>
                                @error('raca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Estado civil') }}</label>
                            
                            <div class="col-md-6">
                                <select id="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" name="estado_civil" value="" required autocomplete="estado_civil">
                                    <option value="1">Solteira</option>
                                    <option value="2">Casada</option>
                                    <option value="3">Viúva</option>
                                    <option value="4">Divorciada</option>
                                </select>
                                @error('estado_civil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ (' Insira uma foto')}}" required autocomplete="foto">

                                @error('foto')
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