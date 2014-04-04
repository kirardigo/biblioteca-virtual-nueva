   <div style="margin-left:100px;">


<h1 class="h1info">Anuncios</h1>

<div id="accordion" style="width: 700px;">

 



    <?php foreach ($Anuncios as $Anuncio): ?>

      
      <h3><?php 
      $cosa=$Anuncio->getFechaAnuncio();
      $m=substr($cosa,-14,2);
      $d=substr($cosa,-11,2);
      $a=substr($cosa,-19,4);
      $h=substr($cosa,-9,10);
      $cosa= $d.'/'.$m.'/'.$a.' a las '.$h;
      
      echo $Anuncio->getTitulo()."</br>Creado el ".$cosa." por ".$Anuncio->getUsuario()->getUsuario()."."?>




<div nowrap style="float: right;"> 
      <?php if($sf_user->hasCredential('admin')):?>
    
    <?php echo link_to('<i class="icon-pencil icon-white"></i>Modificar', 'anuncio/edit?id_anuncio='.$Anuncio->getIdAnuncio(), array('method' => 'delete', 'class'=>"btn btn-warning btn-mini")) ?>
    <?php endif;?>
  
  <?php if($sf_user->hasCredential('admin')):?>
        
          
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'anuncio/delete?id_anuncio='.$Anuncio->getIdAnuncio(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el anuncio', 'class'=>"btn btn-danger btn-mini")) ?>

      
   <?php endif;?>
</div>
</h3> 
 <div><?php echo $Anuncio->getInformacion() ?>

 
 </div>
    <?php endforeach; ?>

</div>
<br>
<?php if($sf_user->hasCredential('admin')):?>
  <a class="btn btn-inverse" href="<?php echo url_for('anuncio/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
<?php endif; ?>
</div>
