 <!--  <div class="example">

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

</br> </br>-->



<?php if ($apo ==1):?>

<object data="<?php echo image_path('../js/pdfjs/web/viewer.html?file=../../../uploads/aporte/'.$arch)?>" width="950" height="1075"><embed src="<?php echo image_path('../js/pdfjs/web/viewer.html?file=../../../uploads/aporte/'.$arch)?>" width="950" height="1075"></embed> ERROR, No pudo mostrarse la pagina. </object>


<?php else:?>
<?php echo link_to('<i class="icon-list icon-white"></i>Agregar material a mi lista', 'lectura/agregar?idarch='.$idarch.'&cosa='.$idarch,array( 'class'=>"btn btn-inverse btn-mini") ) ?>

</br> </br>

<object data="<?php echo image_path('../js/pdfjs/web/viewer.html?file=../../../uploads/material/'.$arch)?>" width="950" height="1075"><embed src="<?php echo image_path('../js/pdfjs/web/viewer.html?file=../../../uploads/material/'.$arch)?>" width="950" height="1075"></embed> ERROR, No pudo mostrarse la pagina. </object>


<?php endif;?>


