<h1 class ="h1info">Mis Materiales</h1>

<?php foreach ($Listas as $Lista): ?>

<div class="label label-important"> <?php echo $Lista->getMaterial()->getArchivo() ?>

    <div nowrap style="float:right;">
          <?php 
      $ext=substr(strrchr($Lista->getMaterial()->getArchivo(), '.'), 1);
      
      if ($ext=='JPG'||$ext=='PNG'||$ext=='BMP'||$ext=='GIF'||$ext=='PDF'||$ext=='GIF'){    
                  echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Lista->getMaterial()->getArchivo().'&id='.$Lista->getMaterial()->getIdMaterial(),array( 'class'=>"btn btn-info btn-mini") );  }
				

           ?> 
            <?php if ($Lista->getMaterial()->getArchivo()!=null):?>
      <?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'material/download?archivito='.$Lista->getMaterial()->getArchivo().'&id='.$Lista->getMaterial()->getIdMaterial(),array( 'class'=>"btn btn-success btn-mini") ) ?>
      <?php endif?>
</div></div>



<div class="label label-default"> <?php if ($Lista->getMaterial()->getAutor())echo 'Autor: '.$Lista->getMaterial()->getAutor() ?> Titulo: <?php echo $Lista->getMaterial()->getTitulo() ?> </div>

</br>
<?php endforeach; ?>
