<h1>Localidads List</h1>

<table>
  <thead>
    <tr>
      <th>Id localidad</th>
      <th>Nombre</th>
      <th>Cod postal</th>
      <th>Provincia id provincia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
      <td><a href="<?php echo url_for('localidad/edit?id_localidad='.$Localidad->getIdLocalidad()) ?>"><?php echo $Localidad->getIdLocalidad() ?></a></td>
      <td><?php echo $Localidad->getNombre() ?></td>
      <td><?php echo $Localidad->getCodPostal() ?></td>
      <td><?php echo $Localidad->getProvinciaIdProvincia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('localidad/new') ?>">New</a>
