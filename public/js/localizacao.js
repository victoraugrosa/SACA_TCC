var texto = document.getElementById("demo");

function getLocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  else{
    texto.innerHTML = "Navegador não tem suporte a Geolocalização";
  }
}
function showPosition(position){
  alert("Latitude: " + position.coords.latitude +
  "\nLongitude: " + position.coords.longitude);
}




//*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//////////////////Teste gravar audio///////////////////////////////



      


        /*window.onload = function () {
        //helpAudio = document.getElementById('help');
        //pause = document.getElementById('pause');

        // get audio stream from user's mic
        navigator.mediaDevices.getUserMedia({
          audio: true
        })
          .then(function (stream) {
          //helpMap.addEventListener('click', startRecording);
          //pause.addEventListener('click', stopRecording);
          //downloadButton.addEventListener('click', download);
          recorder = new MediaRecorder(stream);

          recorder.ondataavailable = handleDataAvailable;

          // listen to dataavailable, which gets triggered whenever we have
          // an audio blob available
          recorder.addEventListener('dataavailable', download);
        });
      };

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


      /*function onRecordingReady(e) {
        var audio = document.getElementById('audio');
        // e.data contains a blob representing the recording
        audio.src = URL.createObjectURL(e.data);
        audio.play();
      }*/

      /*function play() {
        var superBuffer = new Blob(recordedChunks);
        audio.src =
          window.URL.createObjectURL(superBuffer);
        audio.play();
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
      }*/
