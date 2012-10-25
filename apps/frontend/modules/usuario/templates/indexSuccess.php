<h1>Usuarios</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>

      <th>Usuario</th>
      <th>Password</th>
      <th>¿Es administrador?</th>
      <th>Email</th>
      <th>Nombre real</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Usuarios as $Usuario): ?>
    <tr>

      <td><?php echo $Usuario->getUsuario() ?></td>
      <td>******</td>
      <td><?php echo $Usuario->getAdmin() ?></td>
      <td><?php echo $Usuario->getEmail() ?></td>
      <td><?php echo $Usuario->getPfisica()->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('usuario/edit?id_usuario='.$Usuario->getIdUsuario()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'usuario/delete?id_usuario='.$Usuario->getIdUsuario(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el usuario?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 <a class="btn btn-success" href="<?php echo url_for('usuario/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
