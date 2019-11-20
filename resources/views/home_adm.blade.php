@extends('layouts.app')

@section('content')
<script>
    

</script>

<div class="row" style="text-align: center; margin-top:10%; margin-left:5px; font-size:18px;">
  <div class="col-1 bg-white" style="padding:5px; border-width:1px; border-style:solid; border-radius:20px; border-color:black;">
    <div class="nav flex-column nav-pills" style="margin-top: 10px; margin-bottom: 10px;"id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Usuárias</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chamadas</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Conta</a>
    </div>
  </div>
  
  <div class="col-10">
  <button onclick="getLocation()"  data-toggle="modal" data-target="#ModalDenuncia">Teste</button>
  <br>
  </div>
</div>

<div class="row" style="text-align: center; margin-top:10%; margin-left:10px; font-size:18px;">
<div class="col-10">
    <p id="error_text"></p>
    <div id="viewmap"></div>
</div>

<div class="modal fade" id="ModalDenuncia" tabindex="-1" role="dialog" aria-labelledby="TituloModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!--Título Modal-->
            <div class="modal-header">
                <h4 class="modal-title" id="TituloModal">EMERGÊNCIA</h4>
                <!--Botão Fechar Modal-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                 </button>
            </div>
            <!--Corpo modal-->
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center"><b>Localização enviada para autoridades</b><span class="material-icons">check_circle</span></li><!--Descrição+Ícone check Material Design-->
                    <li class="list-group-item d-flex justify-content-between align-items-center"><b>Localização enviada para guardiões</b><span class="material-icons">check_circle</span></li><!--Descrição+Ícone check Material Design-->
                    <li class="list-group-item d-flex justify-content-between align-items-center"><b>Iniciando gravação de áudio</b><span style="transition-duration: 5s;" class="spinner-border spinner-border-sm"><span class="material-icons">check_circle</span></span></li><!--Descrição+Ícone check Material Design-->
                </ul>
            </div>
        
            <!--Rodapé Modal-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-circle btn-xl">teste</button>
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
