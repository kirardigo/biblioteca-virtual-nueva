 


<h1 class="h1info">Anuncios</h1>
</br>

<div id="paging_container6" class="container">

    <div  class="alt_page_navigation"></div><br></br>


<table class="table table-bordered" style="   width: 700px; margin-left: 100px; margin-right: 100px;">      


  
    <?php foreach ($Anuncios as $Anuncio): ?>
    <thead class="alt_content">
    
  
<tr style="background: black; color: white; ">
          <td  ><?php
          
                $cosa=$Anuncio->getFechaAnuncio();
      $m=substr($cosa,-14,2);
      $d=substr($cosa,-11,2);
      $a=substr($cosa,-19,4);
      $h=substr($cosa,-9,10);
      $cosa= $d.'/'.$m.'/'.$a.' a las '.$h;
          
          
          
          
          
          
          
          echo $Anuncio->getTitulo()."</br>Creado el ".$cosa." por ".$Anuncio->getUsuario()->getUsuario()."."?></td>
      
        <?php if($sf_user->hasCredential('admin')):?>
    <td style="text-align: right; width: 200px" >
    <?php echo link_to('<i class="icon-pencil icon-white"></i>Modificar', 'anuncio/edit?id_anuncio='.$Anuncio->getIdAnuncio(), array('method' => 'delete', 'class'=>"btn btn-warning btn-mini")) ?>
    
  
  
        
          
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'anuncio/delete?id_anuncio='.$Anuncio->getIdAnuncio(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el anuncio', 'class'=>"btn btn-danger btn-mini")) ?>

      </td>
   <?php endif;?>
</tr>
    
    
    
    
 
      
    <tr>
    
      
        <td colspan="2" style="background: peru; color: black;"><?php echo sfOutputEscaper::unescape($Anuncio->getInformacion()) ?></td>

    </tr></thead>
    <?php endforeach; ?>
  
</table></div>

</br>
<?php if($sf_user->hasCredential('admin')):?>
  <a class="btn btn-inverse" href="<?php echo url_for('anuncio/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
<?php endif; ?>



