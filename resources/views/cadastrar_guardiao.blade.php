@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white" id="card_header">{{ __('Cadastro de Guardião') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('guardiao.store') }}">
                        @csrf

                        <div class="form-group row">
    
                        @if($botao == 0)<!--if que oculta input depois de cadastrado 3 guardiões enquanto resultado da variao do GuardiaoController "botao" é igual a 0-->
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
                            <label for="ddd" class="col-md-4 col-form-label text-md-right">{{ __('DDD') }}</label>

                            <div class="col-md-6">
                                <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{ old('ddd') }}" required autocomplete="ddd" autofocus>

                                @if($botao == 3)
                                <input id="ddd" disabled type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{ old('ddd') }}" required autocomplete="ddd" autofocus>
                                @endif

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

                                @if($botao == 3)
                                <input id="celular" disabled type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                                @endif

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @endif<!--Final do if que oculta input depois de cadastrado 3 guardiões-->

                        <input type="hidden" id= 'idUsuaria' name="idUsuaria" value="{{ session('id') }}"> 

     
                        <div class="form-group row mb-0">
                        @if($botao == 0)
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar + Guardiões') }}
                                </button>
                            </div>
                            @else
                            <div class="col-md-12 offset-md-4">
                                <button type="button" class="btn btn-primary btn-block">
                                    <a href="{{route('register')}}" style="text-decoration:none; color:white;">
                                    {{ __('Próximo passo') }}
                                    </a>
                                </button>
                            </div>
                            @endif
                           
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection