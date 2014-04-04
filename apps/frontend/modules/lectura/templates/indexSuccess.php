   <div class="example">

        <div class="player">
            
            <div class="title"></div>
            <div class="artist"></div>
            <div class="cover"></div>
            <div class="controls">
                <div class="play"></div>
                <div class="pause"></div>
                <div class="rew"></div>
                <div class="fwd"></div>
            </div>
            <div class="volume"></div>
            
        </div>
        <ul class="playlist hidden">
            <li audiourl="../musica/canon.mp3" cover="../musica/coverudc.jpg" artist="Artist 1">Canon</li>
            <li audiourl="../musica/porunacabeza.mp3" cover="../musica/cover2.jpg" artist="Artist 2">Por una cabeza</li>
            <li audiourl="../musica/kodoku.mp3" cover="../musica/cover3.jpg" artist="Artist 3">Kodoku na junrei</li>
  
        </ul>

    </div>
</div>
</br> </br>

<!--<audio preload="auto" controls>

	<source src="<?php// echo image_path('../musica/kodoku.mp3')?>" /> 
	    
</audio>
</br> </br>-->


<embed src="<?php echo image_path('../uploads/files/'.$arch)?>" width="850" height="1075"></embed>

