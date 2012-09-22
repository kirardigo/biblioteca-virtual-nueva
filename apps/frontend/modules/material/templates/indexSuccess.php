<h1>Materiales</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id material</th>
      <th>Archivo</th>
      
      <th>Bajar</th>
      <th>Lectura Online</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Editorial</th>
      <th>Autor</th>
      <th>Descripcion</th>
      <?php if($sf_user->hasCredential('admin')):?>
      <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Materials as $Material): ?>
    <tr>
      <td><?php echo $Material->getIdMaterial() ?></a></td>
      <td><?php echo $Material->getArchivo()  ?></td>
      <?php if ($Material->getArchivo()!=null):?>
      <td><?php echo link_to('<i class="icon-download icon-white"></i>Descargar', 'material/download?archivito='.$Material->getArchivo().'&id='.$Material->getIdMaterial(),array( 'class'=>"btn btn-success btn-mini") ) ?></td>
      <?php endif?>
      <?php if ($Material->getArchivo()!=null):?>
      <td><?php echo link_to('<i class="icon-eye-open icon-white"></i>Visualizar', 'lectura/index?archivo='.$Material->getArchivo(),array( 'class'=>"btn btn-info btn-mini") )  ?></td>
      <?php endif?>
      <td><?php echo $Material->getNombre() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getDescripcion() ?></td>
      <?php if($sf_user->hasCredential('admin')):?>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('material/edit?id_material='.$Material->getIdMaterial()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'material/delete?id_material='.$Material->getIdMaterial(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el material?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($sf_user->hasCredential('admin')):?>
<a class="btn btn-inverse" href="<?php echo url_for('material/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<?php endif;?>
