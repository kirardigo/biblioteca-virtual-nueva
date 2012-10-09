
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
       <label>Contenido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Contenido" name="contenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getContenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       
       <label>Subcontenido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Subcontenido" name="subcontenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       
       
       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-info">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>





<h1>Materiales</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id</th>
      <th>Archivo</th>
      

      <th>Autor</th>
      <th>Titulo</th>
      <th>Editorial</th>
      
      <th>Descripcion</th>
    
      <th>Leer</th>

      <th>Bajar</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($elegido as $Material): ?>
    <tr>
      <td><?php echo $Material->getIdMaterial() ?></a></td>
      <td><?php echo $Material->getArchivo()  ?></td>
      
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      
      <td><?php echo $Material->getDescripcion() ?></td>
      
      <?php 
      $ext=substr(strrchr($Material->getArchivo(), '.'), 1);
      
      if ($ext=='jpg'||$ext=='png'||$ext=='bmp'||$ext=='pdf'):?>     
      <td><?php echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Material->getArchivo(),array( 'class'=>"btn btn-info btn-mini") )  ?></td>
     
        <?php else :?>
      <td> </td>
      <?php endif; ?>
      <?php if ($Material->getArchivo()!=null):?>
      <td><?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'material/download?archivito='.$Material->getArchivo().'&id='.$Material->getIdMaterial(),array( 'class'=>"btn btn-success btn-mini") ) ?></td>
      <?php endif?>

      <?php if($sf_user->hasCredential('admin')):?>
      <td nowrap>          
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
<a class="btn btn-inverse" href="<?php echo url_for('material/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<?php endif;?>
