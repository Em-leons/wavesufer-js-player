<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="scripts/waves.js"></script>
<div id="wavePlayer" class="clierfix">
    <div id="audiowave" data-waveurl="http://localhost/mustadmin/uploads/files/auivqz2gxwsl34t.mp3"></div>
    <div id="currentTime"></div>
    <div id="clipTime"></div>
    <!-- Player Controls -->
    <div class="wavePlayer_controls">
        <button class="jp-prev player_button" onclick="wavesurfer.skipBackward();"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
        <button class="jp-play player_button" onclick="wavesurfer.playPause();"><i class="fa fa-play" aria-hidden="true"></i></button>
        <button class="jp-next player_button" onclick="wavesurfer.skipForward();"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        <button class="jp-stop player_button" onclick="wavesurfer.stop();"><i class="fa fa-stop" aria-hidden="true"></i></button>
    </div>
</div>

<script src="scripts/WaveSurferInit.js"></script>