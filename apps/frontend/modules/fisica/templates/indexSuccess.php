<h1>Fisicas List</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id fisica</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Password</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Fisicas as $Fisica): ?>
    <tr>
      <td><a href="<?php echo url_for('fisica/edit?id_fisica='.$Fisica->getIdFisica()) ?>"><?php echo $Fisica->getIdFisica() ?></a></td>
      <td><?php echo $Fisica->getNombre() ?></td>
      <td><?php echo $Fisica->getApellido() ?></td>
      <td><?php echo $Fisica->getUsuario() ?></td>
      <td><?php echo $Fisica->getPassword() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('fisica/edit?id_fisica='.$Fisica->getIdFisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'fisica/delete?id_fisica='.$Fisica->getIdFisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el fisica?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('fisica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
