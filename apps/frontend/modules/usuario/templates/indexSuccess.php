<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Idusuario</th>
      <th>Nombre</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Usuarios as $Usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/edit?idusuario='.$Usuario->getIdusuario()) ?>"><?php echo $Usuario->getIdusuario() ?></a></td>
      <td><?php echo $Usuario->getNombre() ?></td>
      <td><?php echo $Usuario->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
