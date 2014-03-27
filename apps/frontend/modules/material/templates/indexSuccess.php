<body background= "<?php echo image_path('fondo mesa.jpg')?>"></body>


<h2 class="alert-heading offset1">Busqueda de Material</h2>

<fieldset>    
    <form class="well form-search span3 offset1" action="<?php echo url_for('material/index') ?>" method="POST">
       <label>Autor</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Autor" name="autor"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getAutor()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       <label>Titulo</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Titulo" name="titulo"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getTitulo()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       <label>Editorial</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Editorial" name="editorial"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getEditorial()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
<!--       
       <label>Carrera</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Carrera" name="carrera"
       data-source='[<?php //foreach($Materials as $mat){echo "\"".$mat->getCarrera()->getIdCarrera()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
     -->
     <?php if($sf_user->hasCredential('admin')):?>
       <label>Contenido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Contenido" name="contenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getContenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
      <?php endif;?> 
       
       <label>Tema</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Tema" name="subcontenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       
       
       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-info">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>

<h1 class="h1info" >Materiales</h1>





<table class="table table-bordered">
  <thead >
    <tr>

      <th>Archivo</th>
      

      <th>Autor</th>
      <th>Titulo</th>
      <th>Editorial</th>
      
      <th>Descripcion</th>
      <th>
          
          <?php //if ($pager->haveToPaginate()): ?>
            <?php //echo link_to('&laquo;', 'material/index?page='.$pager->getFirstPage()) ?>
            <?php //echo link_to('&lt;', 'material/index?page='.$pager->getPreviousPage()) ?>
            <?php //$links = $pager->getLinks(); foreach ($links as $page): ?>
            <?php //echo ($page == $pager->getPage()) ? $page : link_to($page, 'material/index?page='.$page) ?>
            <?php //if ($page != $pager->getCurrentMaxLink()): ?> - <?php //endif ?>
            <?php //endforeach ?>
            <?php //echo link_to('&gt;', 'material/index?page='.$pager->getNextPage()) ?>
            <?php //echo link_to('&raquo;', 'material/index?page='.$pager->getLastPage()) ?>
          <?php //endif ?>
          
          
          
      </th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach ($elegido as $Material): ?>
    
    <tr>

      <td><?php echo $Material->getArchivo()  ?></td>
      
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      
      <td><?php echo $Material->getDescripcion() ?></td>

  
    

      <td nowrap>  
          <?php 
      $ext=substr(strrchr($Material->getArchivo(), '.'), 1);
      
      if ($ext=='JPG'||$ext=='PNG'||$ext=='BMP'||$ext=='GIF'||$ext=='PDF'||$ext=='GIF'):?>     
      <?php echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Material->getArchivo(),array( 'class'=>"btn btn-info btn-mini") )  ?>
     
        <?php else :?>
      
      <?php endif; ?>


      <?php if($sf_user->hasCredential('admin')):?>
      
        
            <?php if ($Material->getArchivo()!=null):?>
      <?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'material/download?archivito='.$Material->getArchivo().'&id='.$Material->getIdMaterial(),array( 'class'=>"btn btn-success btn-mini") ) ?>
      <?php endif?>
      
              
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('material/edit?id_material='.$Material->getIdMaterial()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'material/delete?id_material='.$Material->getIdMaterial(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el material?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    
     
    
    
    <?php endforeach; ?>

  </tbody>
</table>
<?php endif;?>

<?php if($sf_user->hasCredential('admin')):?>
<br>
<a class="btn btn-inverse" href="<?php echo url_for('material/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<?php endif;?>


