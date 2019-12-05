@extends('layouts.app')

@section('content')
<script>
    function check(){
        var spinner = document.getElementById("spinner");
        var spinner2 = document.getElementById("spinner2");
        var spinner3 = document.getElementById("spinner3");

        var check_icon = document.getElementById("check_icon");
        var check_icon2 = document.getElementById("check_icon2");
        var check_icon3 = document.getElementById("check_icon3");




        setTimeout(function(){
        spinner.style.display="none";
        check_icon.style.display="block";
            setTimeout(function(){
                spinner2.style.display="none";
                check_icon2.style.display="block";
                setTimeout(function(){
                    spinner3.style.display="none";
                    check_icon3.style.display="block";

                },
                  500)
            }
            ,1000);
        }
        ,1500);

        spinner.style.display="block";
        check_icon.style.display="none";
        spinner2.style.display="block";
        check_icon2.style.display="none";
        spinner3.style.display="block";
        check_icon3.style.display="none";


    }


</script>

<div class="row" style="text-align: center; margin-top:10%; margin-left:5px; font-size:18px;">
  <div class="col-1 bg-white" style="padding:5px; border-width:1px; border-style:solid; border-radius:20px; border-color:black;">
    <div class="nav flex-column nav-pills" style="margin-top: 10px; margin-bottom: 10px;"id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link d-inline-flex justify-content-center btn btn-outline-danger btn-responsive" style="color: black; margin-bottom:5px;" id="v-pills-home-tab" href="{{route('home')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-profile-tab"  href="{{route('guardiao.show', Auth::user()->idUsuaria)}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Guardiões</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-settings-tab" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Conta</a>
    </div>
  </div>     

  
<div class="col-10">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">DDD</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <form method="POST" action="{{ route('guardiao.update', Auth::user()->idUsuaria) }}">
    <input type="hidden" name="_token" value="{ { { csrf_token() } } }">
    {!!method_field('PUT')!!}
      <th scope="col">
        <input id="nome"  type="text" class="form-control @error('name') is-invalid @enderror" value="@foreach($guardiao as $guardiao){{$guardiao->nome}}@endforeach"name="nome" required autocomplete="nome" autofocus>
      </th>
        <input type="hidden" id= 'id' name="id" value="{{$guardiao->id}}"> 
      <th scope="col">
        <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{$guardiao->ddd}}" required autocomplete="ddd" autofocus>
      </th>
      <th scope="col">
        <input id="celular" type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{$guardiao->celular}}" required autocomplete="celular" autofocus>
      </th>
      </form>
    </tr>
    <tr>
    <form method="POST" action="{{ route('guardiao.update', Auth::user()->idUsuaria) }}">
      <th scope="col">
        <input id="nome"  type="text" class="form-control @error('name') is-invalid @enderror" value="{{$guardiao->nome}}"name="nome" required autocomplete="nome" autofocus>
      </th>
        <input type="hidden" id= 'id' name="id" value="{{$guardiao->id}}"> 
      <th scope="col">
        <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{$guardiao->ddd}}" required autocomplete="ddd" autofocus>
      </th>
      <th scope="col">
        <input id="celular" type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{$guardiao->celular}}" required autocomplete="celular" autofocus>
      </th>
    </form>
    </tr>
    <tr>


    <form id="fguard1" action="{{ route('guardiao.update', Auth::user()->idUsuaria) }}" class="form" method="POST">
    <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      
      <th scope="col">
        <input id="nome"  type="text" class="form-control @error('name') is-invalid @enderror" value="{{$guardiao->nome}}"name="nome" required autocomplete="nome" autofocus>
      </th>
       <input type="hidden" id= 'id' name="id" value="{{$guardiao->id}}"> 
      <th scope="col">
        <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{$guardiao->ddd}}" required autocomplete="ddd" autofocus>
      </th>
      <th scope="col">
        <input id="celular" type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{$guardiao->celular}}" required autocomplete="celular" autofocus>
      </th>
      <th scope="col">
        <button type="submit" form="fguard1" class="btn btn-primary">
         {{ __('Editar Guardiao') }}
        </button>
      </th>
      </form>
    </tr>
  </tbody>
</table>


    <a href="{{ route('guardiao.show', Auth::user()->idUsuaria) }}" style="text-decoration:none; color:black;">
    {{ __('TESTE') }}
    </a>


</div>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Usuário</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Teste
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
