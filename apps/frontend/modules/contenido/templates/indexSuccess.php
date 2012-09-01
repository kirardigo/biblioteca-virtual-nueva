<h1>Contenidos List</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id contenido</th>
      <th>Numero contenido</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Contenidos as $Contenido): ?>
    <tr>
      <td><a href="<?php echo url_for('contenido/edit?id_contenido='.$Contenido->getIdContenido()) ?>"><?php echo $Contenido->getIdContenido() ?></a></td>
      <td><?php echo $Contenido->getNumeroContenido() ?></td>
      <td><?php echo $Contenido->getNombre() ?></td>
            <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('contenido/edit?id_contenido='.$Contenido->getIdContenido()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'contenido/delete?id_material='.$Contenido->getIdContenido(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el contenido?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a class="btn btn-success" href="<?php echo url_for('contenido/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
