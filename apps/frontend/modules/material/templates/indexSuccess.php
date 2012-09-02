<h1>Materiales</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id material</th>
      <th>Archivo</th>
      
      <th>Bajar</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Editorial</th>
      <th>Autor</th>
      <th>Descripcion</th>
      <th>Subcontenido</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Materials as $Material): ?>
    <tr>
      <td><?php echo $Material->getIdMaterial() ?></a></td>
      <td><?php echo $Material->getArchivo()  ?></td>
      <?php if ($Material->getArchivo()!=null):?>
      <td><?php echo link_to('Descargar', 'material/download?archivito='.$Material->getArchivo().'&id='.$Material->getIdMaterial()); ?></td>
      <?php endif?>
      <td><?php echo $Material->getNombre() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getDescripcion() ?></td>
      <td><?php echo $Material->getSubcontenido()->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('material/edit?id_material='.$Material->getIdMaterial()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'material/delete?id_material='.$Material->getIdMaterial(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el material?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a class="btn btn-success" href="<?php echo url_for('material/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--   <a href="<?php// echo url_for('material/new') ?>">New</a>
