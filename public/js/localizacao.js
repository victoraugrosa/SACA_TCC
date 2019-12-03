var texto = document.getElementById("error_text");
var recorder;


var recordedChunks = [];
window.onload = function () {
        //helpAudio = document.getElementById('help');
        helpMap = document.getElementById('help');

        // get audio stream from user's mic
        navigator.mediaDevices.getUserMedia({
          audio: true
        })
          .then(function (stream) {
          //helpMap.addEventListener('click', startRecording);

          //helpMap = document.getElementById('help');
          //helpMap.addEventListener('click', startRecording);
          //stopButton.addEventListener('click', stopRecording);
          //downloadButton.addEventListener('click', download);

          helpMap.addEventListener('click', startRecording);
          recorder = new MediaRecorder(stream);

          recorder.ondataavailable = handleDataAvailable;

          // listen to dataavailable, which gets triggered whenever we have
          // an audio blob available
          recorder.addEventListener('dataavailable', download);
        });
      };

function getLocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  else{
    texto.innerHTML = "Navegador não tem suporte a Geolocalização";
  }
}

function showPosition(position){
  lati=position.coords.latitude;
  long=position.coords.longitude;
  latilong=new google.maps.LatLng(lati, long)

  viewmap=document.getElementById('viewmap')
  viewmap.style.height='250px';
  viewmap.style.width='500px';
  viewmap.style.align='center';
 
  var myOptions={
  center:latilong,zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("viewmap"),myOptions);
  var marker=new google.maps.Marker({position:latilong,map:map,title:"Você está Aqui!"});



}
function showError(error)
  {
  switch(error.code)
    {
    case error.PERMISSION_DENIED:
      texto.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
      break;
    case error.POSITION_UNAVAILABLE:
      texto.innerHTML="Localização indisponível."
      break;
    case error.TIMEOUT:
      texto.innerHTML="O tempo da requisição expirou."
      break;
    case error.UNKNOWN_ERROR:
      texto.innerHTML="Algum erro desconhecido aconteceu."
      break;
    }
  }





//*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//////////////////Teste gravar audio///////////////////////////////

function handleDataAvailable(event) {
  if (event.data.size > 0) {
    recordedChunks.push(event.data);
  }
}

function startRecording() {
  //help.disabled = true;

  recorder.start();
  
  setInterval(stopRecording, 10000);
  
  
}
function stopRecording() {
  //helpAudio.disabled = false;

  //stopButton.disabled = true;

  // Stopping the recorder will eventually trigger the `dataavailable` event and we can complete the recording process
  recorder.stop();

    startRecording();
  

}

function download() {
  var blob = new Blob(recordedChunks, {
    type: 'audio/webm'
  });
  var url = URL.createObjectURL(blob);
  var audiofile = document.createElement('a');
  document.body.appendChild(audiofile);
  //audiofile.style = 'display: none';
  audiofile.href = url;
  audiofile.download = 'audioWas.webm';
  audiofile.click();
  window.URL.revokeObjectURL(url);
}