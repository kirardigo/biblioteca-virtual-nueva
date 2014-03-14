<h1 class="h1info">Localidades</h1>

<table>
  <thead>
    <tr>

      <th>Nombre</th>
      <th>Cod postal</th>
      <th>Provincia id provincia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
    
      <td><?php echo $Localidad->getNombre() ?></td>
      <td><?php echo $Localidad->getCodPostal() ?></td>
      <td><?php echo $Localidad->getProvinciaIdProvincia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('localidad/new') ?>">New</a>
