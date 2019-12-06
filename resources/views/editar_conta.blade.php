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
<div class="col-2">
  <div class="col-10 bg-white" style="padding:10px; border-width:1px; border-style:solid; border-radius:20px; border-color:black;">
    <div class="nav flex-column nav-pills" style="margin-top: 10px; margin-bottom: 10px;"id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link d-inline-flex justify-content-center btn btn-outline-danger btn-responsive" style="color: black; margin-bottom:5px;" id="v-pills-home-tab" href="{{route('home')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-profile-tab"  href="{{route('guardiao.show', Auth::user()->idUsuaria)}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Guardiões</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-settings-tab" href="{{route('formulario.show', Auth::user()->idUsuaria)}}" role="tab"  aria-selected="true">Conta</a>
    </div>
  </div> 
</div> 

<div class="col"> 
<table class="table table-striped">
  <thead>
    <p><b>Endereço de {{Auth::user()->name}}</b></p>
    <tr>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Complemento</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">País</th>
    </tr>
  </thead>
  <tbody>
  @foreach($endereco as $endereco)
  <tr>
    <form method="POST" id="form{{$loop->index}}" action="{{ route('endereco.update', $endereco->id) }}">
    @csrf
    {{ method_field('PUT') }}
      <th scope="col">
        <input id="CEP"  type="number" maxlength="9" class="form-control @error('name') is-invalid @enderror" name="CEP" value='{{$endereco->CEP}}' required autocomplete="CEP" autofocus>
      </th>
        <input type="hidden" id= 'id' name="id" value="{{$endereco->id}}"> 
      <th scope="col">
        <input id="rua"  type="rua" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{$endereco->rua}}" required autocomplete="rua">
      </th>
      <th scope="col">
        <input id="numero"  type="numero" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{$endereco->numero}}" required autocomplete="numero">
      </th>
      <th scope="col">
        <input id="complemento"  type="complemento" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{$endereco->complemento}}" required autocomplete="complemento">
      </th>
      <th scope="col">
        <input id="bairro"  type="bairro" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{$endereco->bairro}}" required autocomplete="bairro">
      </th>
      <th scope="col">
      <input id="cidade"  type="cidade" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{$endereco->cidade}}" required autocomplete="cidade">
      </th>
      <th scope="col">
        <select id="estado" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{$endereco->estado}}" required autocomplete="estado">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão </option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco </option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>

        </select>      
      </th>
      <th scope="col">
        <input id="pais"  type="pais" class="form-control @error('pais') is-invalid @enderror" name="pais" value="{{$endereco->pais}}" required autocomplete="pais">
      </th>
      <th scope="col">
        <button type="submit" form="form{{$loop->index}}" class="btn btn-primary">
         {{ __('Editar Endereço') }}
        </button>
      </th>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>

<div class="row" style="text-align: center; margin-top:10%; margin-left:5px; font-size:18px;">

<div class="col-1">
 </div> 



    <div class="col"> 
    <table class="table table-striped">
  <thead>
    <p><b>Contato de {{Auth::user()->name}}</b></p>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">DDD</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contato as $contato)
  <tr>
    <form method="POST" id="form{{$loop->index}}" action="{{ route('endereco.update', $endereco->id) }}">
    @csrf
    {{ method_field('PUT') }}
      <th scope="col">
        <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $contato->email}}" required autocomplete="email">
      </th>
      <th>
        <input id="ddd" type="number" maxlength="2" class="form-control @error('ddd') is-invalid @enderror" name="ddd" value="{{ $contato->ddd}}" required autocomplete="celular" autofocus>
      </th>
      <th scope="col">
        <input id="celular" type="number" maxlength="9" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ $contato->celular }}" required autocomplete="celular" autofocus>
      </th>

      <th scope="col">
        <button type="submit" form="form{{$loop->index}}" class="btn btn-primary">
         {{ __('Editar Contato') }}
        </button>
      </th>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
