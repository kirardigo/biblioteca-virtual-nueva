<h1 class="h1info">De alumnos para alumnos</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      
      <th>Archivo</th>
      <th>Titulo</th>
      <th>Descripcion</th>
      <th>Autor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Aportes as $Aporte): ?>
    <tr>

      <td><?php echo $Aporte->getArchivo() ?></td>
      <td><?php echo $Aporte->getTitulo() ?></td>
      <td><?php echo $Aporte->getDescripcion() ?></td>
      <td><?php echo $Aporte->getUsuario()->getUsuario(); ?></td>
      
      <td>  
          <?php $ext=substr(strrchr($Aporte->getArchivo(), '.'), 1);
                if ($ext=='JPG'||$ext=='PNG'||$ext=='BMP'||$ext=='GIF'||$ext=='PDF'||$ext=='GIF'){    
                    echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Aporte->getArchivo(),array( 'class'=>"btn btn-info btn-mini") );}
     
            ?>
          <?php if ($Aporte->getArchivo()!=null):?>
      <?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'aporte/download?archivito='.$Aporte->getArchivo().'&id='.$Aporte->getIdAporte(),array( 'class'=>"btn btn-success btn-mini") ) ?>
      <?php endif; ?>

      <?php if($sf_user->hasCredential('admin')):?>
      
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('aporte/edit?id_aporte='.$Aporte->getIdAporte()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'aporte/delete?id_aporte='.$Aporte->getIdAporte(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el aporte?', 'class'=>"btn btn-danger btn-mini")) ?>
      
      <?php endif;?>
      </td>
      
      
      
      
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php if($sf_user->isAuthenticated()):?>
<a class="btn btn-inverse" href="<?php echo url_for('aporte/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>

<?php endif;?>
