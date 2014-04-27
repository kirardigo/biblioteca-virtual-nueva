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
            <div class="tracker"></div>
            
        </div>
        <ul class="playlist hidden">
            <li audiourl="canon.mp3" cover="cover1.jpg" artist="hola">Canon</li>
            <li audiourl="porunacabeza.mp3" cover="cover2.jpg" artist="Artist 2">Por una cabeza</li>
            <li audiourl="kodoku.mp3" cover="cover3.jpg" artist="Artist 3">Kodoku na junrei</li>
  
        </ul>

    </div>
</div>
</br> </br>
<?php //echo url_fo('@my_rule',true) ?>


<?php if ($apo ==1):?>
<embed style="margin-left: 100px;" src="<?php echo image_path('../uploads/aporte/'.$arch)?>" width="850" height="1075"></embed>
<?php else:?>

<embed style="margin-left: 100px;" src="<?php echo image_path('../uploads/material/'.$arch)?>" width="850" height="1075"></embed>
<?php endif;?>
<!--<iframe id="viewer" src="{{ asset('/plugins/sfViewerPlugin/index.html') }}#{{ asset('/uploads/files/ANONIMO_REDES.PDF') }}" width='900' height='600' allowfullscreen webkitallowfullscreen></iframe>-->

