


<h2 style="color: white;" class="alert-heading offset1">Busqueda de Material</h2>

<fieldset>    
    <form style="background: sienna;" class="well form-search span3 offset1" action="<?php echo url_for('material/index') ?>" method="POST">
       <label class="busqueda">Autor</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Autor" name="autor"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getAutor()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       <label class="busqueda">Titulo</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Titulo" name="titulo"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getTitulo()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       <label class="busqueda">Editorial</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Editorial" name="editorial"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getEditorial()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
<!--       
       <label>Carrera</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Carrera" name="carrera"
       data-source='[<?php //foreach($Materials as $mat){echo "\"".$mat->getCarrera()->getIdCarrera()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
     -->
     <?php if($sf_user->hasCredential('admin')):?>
       <label class="busqueda">Contenido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Contenido" name="contenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getContenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
      <?php endif;?> 
       
       <label class="busqueda">Tema</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Tema" name="subcontenido"
       data-source='[<?php foreach($Materials as $mat){echo "\"".$mat->getSubcontenido()->getNombre()."\"";if($Materials->getPosition()< sizeof($Materials)-1){echo(",");}}?>]'>
       
       
       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-inverse">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>

<h1 class="h1info" >Materiales UDC</h1>



 


<div id="paging_container3" class="container">

    <div  class="alt_page_navigation"></div><br></br>

    
    
    
      <table class="table table-bordered">  
           <thead >
    <tr>

      <th>Archivo</th>
      

      <th>Autor</th>
      <th>Titulo</th>
      <th>Editorial</th>
      
      <th>Descripcion</th>
      
    </tr>
    </thead>
          
    <?php foreach ($elegido as $Material): ?>



     

        <tbody class="alt_content">
      <tr><td><?php echo $Material->getArchivo()  ?></td>
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      
      <td><?php echo $Material->getDescripcion() ?></td>
 
  
    <?php if($sf_user->isAuthenticated()):?>

       <td nowrap>
          <?php 
      $ext=substr(strrchr($Material->getArchivo(), '.'), 1);
      
      if ($ext=='JPG'||$ext=='PNG'||$ext=='BMP'||$ext=='GIF'||$ext=='PDF'||$ext=='GIF'):?>     
      <?php echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Material->getArchivo(),array( 'class'=>"btn btn-info btn-mini") )  ?>
     
        
      
      <?php endif; ?>
            <?php if ($Material->getArchivo()!=null):?>
      <?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'material/download?archivito='.$Material->getArchivo().'&id='.$Material->getIdMaterial(),array( 'class'=>"btn btn-success btn-mini") ) ?>
      <?php endif?>

      <?php if($sf_user->hasCredential('admin')):?>
      
        

      
              
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('material/edit?id_material='.$Material->getIdMaterial()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'material/delete?id_material='.$Material->getIdMaterial(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el material?', 'class'=>"btn btn-danger btn-mini")) ?>
      
      <?php endif;?>
</td><?php endif;?></tr>  </tbody>

    
    <?php endforeach; ?></table> 
   </div>
   
<?php endif;?>

<?php if($sf_user->hasCredential('admin')):?>
<br>
<a class="btn btn-inverse" href="<?php echo url_for('material/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
<?php endif;?>



	