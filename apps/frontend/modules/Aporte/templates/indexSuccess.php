<h1 class="h1info">De alumnos para alumnos</h1>

<div id="paging_container3" class="container">

    <div  class="alt_page_navigation"></div><br></br>

<table class="table table-bordered">
  <thead>
    <tr>
      
      <th>Archivo</th>
      <th>Titulo</th>
      <th>Descripcion</th>
      <th>Autor</th>
    </tr>
  </thead>

    <?php foreach ($Aportes as $Aporte): ?>
          <tbody class="alt_content">
    <tr>

      <td><?php echo $Aporte->getArchivo() ?></td>
      <td><?php echo $Aporte->getTitulo() ?></td>
      <td><?php echo sfOutputEscaper::unescape($Aporte->getDescripcion()) ?></td>
      <td><?php echo $Aporte->getUsuario()->getUsuario(); ?></td>
      
      <td>  
          <?php $ext=substr(strrchr($Aporte->getArchivo(), '.'), 1);
                if ($ext=='JPG'||$ext=='PNG'||$ext=='BMP'||$ext=='GIF'||$ext=='PDF'||$ext=='GIF'):?>   
                    
                    
				<a class="btn btn-info btn-mini" target="_blank" href="<?php echo image_path('../js/pdfjs/web/viewer.html?file=../../../uploads/aporte/'.$Aporte->getArchivo())?>">Visualizar</a>

           <?php endif;?>         
                    
     
            
          <?php if ($Aporte->getArchivo()!=null):?>
      <?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'aporte/download?archivito='.$Aporte->getArchivo().'&id='.$Aporte->getIdAporte(),array( 'class'=>"btn btn-success btn-mini") ) ?>
      <?php endif; ?>

      <?php if( ($sf_user->getAttribute('id') == $Aporte->getUsuario()->getIdUsuario()) ||($sf_user->hascredential('admin')) ):?>
      
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('aporte/edit?id_aporte='.$Aporte->getIdAporte()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'aporte/delete?id_aporte='.$Aporte->getIdAporte(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el aporte?', 'class'=>"btn btn-danger btn-mini")) ?>
      
      <?php endif;?>
      </td>
      
      
      
      
      
    </tr>  </tbody>
    <?php endforeach; ?>

</table> 
   </div>
<?php if($sf_user->isAuthenticated()):?>
<a class="btn btn-inverse" href="<?php echo url_for('aporte/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>

<?php endif;?>
