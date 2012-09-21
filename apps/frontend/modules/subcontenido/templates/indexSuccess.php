<h1>Subcontenidos List</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id subcontenido</th>
      <th>Nombre</th>
      <th>Numero subcontenido</th>
      <th>Contenido id contenido</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Subcontenidos as $Subcontenido): ?>
    <tr>
      <td><?php echo $Subcontenido->getIdSubcontenido() ?></td>
      <td><?php echo $Subcontenido->getNombre() ?></td>
      <td><?php echo $Subcontenido->getNumeroSubcontenido() ?></td>
      <td><?php echo $Subcontenido->getContenidoIdContenido() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('subcontenido/edit?id_subcontenido='.$Subcontenido->getIdSubcontenido()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'subcontenido/delete?id_subcontenido='.$Subcontenido->getIdSubcontenido(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el subcontenido?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('subcontenido/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
