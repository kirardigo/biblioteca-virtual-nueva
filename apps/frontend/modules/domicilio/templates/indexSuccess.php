<h1>Domicilios List</h1>

<table>
  <thead>
    <tr>
      <th>Id domicilio</th>
      <th>Calle</th>
      <th>Altura</th>
      <th>Cod postal</th>
      <th>Localidad id localidad</th>
      <th>Persona id persona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Domicilios as $Domicilio): ?>
    <tr>
      <td><a href="<?php echo url_for('domicilio/edit?id_domicilio='.$Domicilio->getIdDomicilio()) ?>"><?php echo $Domicilio->getIdDomicilio() ?></a></td>
      <td><?php echo $Domicilio->getCalle() ?></td>
      <td><?php echo $Domicilio->getAltura() ?></td>
      <td><?php echo $Domicilio->getCodPostal() ?></td>
      <td><?php echo $Domicilio->getLocalidadIdLocalidad() ?></td>
      <td><?php echo $Domicilio->getPersonaIdPersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('domicilio/new') ?>">New</a>
