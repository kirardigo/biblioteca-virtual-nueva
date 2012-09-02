<h1>Fisicas List</h1>

<table>
  <thead>
    <tr>
      <th>Id fisica</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Password</th>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('fisica/new') ?>">New</a>
