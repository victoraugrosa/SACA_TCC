@extends('layouts.app')

@section('content')
<script>
    

</script>

<div class="row" style="text-align: center; margin-top:10%; margin-left:10px; font-size:18px;">
  <div class="col-1 bg-white" style="border-width:1px; border-style:solid; border-radius:20px; border-color:black;">
    <div class="nav flex-column nav-pills" style="  margin-top: 10px; margin-bottom: 10px;"id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-home-tab" data-toggle="button" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Guardiões</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Conta</a>
      <a class="nav-link btn btn-outline-danger" style="color: black; margin-bottom:5px;" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sair</a>
    </div>
  </div>
  
  <div class="col-10">
  <button onclick="getLocation()">Teste</button>
  <br>
  </div>
</div>

<div class="row" style="text-align: center; margin-top:10%; margin-left:10px; font-size:18px;">
<div class="col-10">
    <div id="mapholder"></div>
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
