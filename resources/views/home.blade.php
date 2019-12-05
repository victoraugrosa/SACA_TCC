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
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-profile-tab"  href="{{route('guardiao.show', Auth::user()->idUsuaria)}}" role="tab"  aria-selected="true">Guardiões</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-settings-tab" href="{{route('formulario.show', Auth::user()->idUsuaria)}}" role="tab"  aria-selected="true">Conta</a>
    </div>
  </div>     

  
  <div class="col-10">
  <button onclick="getLocation(); check()"  data-toggle="modal" data-target="#ModalDenuncia">Teste</button>
  <br>
  </div>
</div>

<div class="row" style="text-align: center; margin-top:10%; margin-left:10px; font-size:18px;">
<div class="col-1 bg-white">
</div>
<div class="col-30">
    <p id="error_text"></p>
    <div id="viewmap"></div>
</div>
</div>

<div class="modal fade" id="ModalDenuncia" tabindex="-1" role="dialog" aria-labelledby="TituloModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!--Título Modal-->
            <div class="modal-header">
                <h4 class="modal-title" id="TituloModal">EMERGÊNCIA</h4>
                <!--Botão Fechar Modal-->
                <button type="button" onclick="close()" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                 </button>
            </div>
            <!--Corpo modal-->
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Localização enviada para autoridades</b>
                        <span id="spinner" class="spinner-border spinner-border-sm"></span>   
                        <span id="check_icon" style="display: none;" class="material-icons">check_circle</span>
                    </li><!--Descrição+Ícone check Material Design-->
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Localização enviada para guardiões</b>
                        <span id="spinner2" class="spinner-border spinner-border-sm"></span>
                        <span id="check_icon2" style="display: none;" class="material-icons">check_circle</span>
                    </li><!--Descrição+Ícone check Material Design-->

                    <li class="list-group-item d-flex justify-content-between align-items-center">      
                        <b>Iniciando gravação de áudio</b> 
                         
                        <span id="spinner3" class="spinner-border spinner-border-sm"></span>
                        <span id="check_icon3" style="display: none;" class="material-icons">check_circle</span>
                    </li><!--Descrição+Ícone check Material Design-->
                </ul>
            </div>
        
            <!--Rodapé Modal-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-lg rounded-circle col-md">teste</button>
            </div>
        </div>
    </div>

  </div>



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
