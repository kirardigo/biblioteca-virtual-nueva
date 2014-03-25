
<!--<h1>Logueate para acceder al material</h1>-->

<!--<
<img src="<?php //echo image_path('banner.png')?>" alt="Fondo" width="600px" ></img>

-->




<h1 class="h1info">Anuncios</h1>

<table class="table table-bordered">
 


  <tbody>
    <?php foreach ($Anuncios as $Anuncio): ?>
    <tr>
     <thead> 
      
      <td><?php 
      $cosa=$Anuncio->getFechaAnuncio();
      $m=substr($cosa,-14,2);
      $d=substr($cosa,-11,2);
      $a=substr($cosa,-19,4);
      $h=substr($cosa,-9,10);
      $cosa= $d.'/'.$m.'/'.$a.' a las '.$h;
      
      echo $Anuncio->getTitulo()."</br>Creado el ".$cosa." por ".$Anuncio->getUsuario()->getUsuario()."."?></td>
  
  
  <?php if($sf_user->hasCredential('admin')):?>
      <td nowrap>          
          
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'anuncio/delete?id_anuncio='.$Anuncio->getIdAnuncio(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el anuncio', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      
   <?php endif;?>
      </thead>
    </tr>
    <tr>
    <td><?php echo $Anuncio->getInformacion() ?></td>
    <?php if($sf_user->hasCredential('admin')):?>
    <td><a class="btn btn-warning btn-mini" href="<?php echo url_for('anuncio/edit?id_anuncio='.$Anuncio->getIdAnuncio()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a></td>
    <?php endif;?>
    
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br>
<?php if($sf_user->hasCredential('admin')):?>
  <a class="btn btn-inverse" href="<?php echo url_for('anuncio/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<?php endif; ?>

