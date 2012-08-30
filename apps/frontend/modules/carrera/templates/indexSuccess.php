<h1>Carreras List</h1>

<table>
  <thead>
    <tr>
      <th>Id carrera</th>
      <th>Nombre</th>
      <th>Material id material</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Carreras as $Carrera): ?>
    <tr>
      <td><a href="<?php echo url_for('carrera/edit?id_carrera='.$Carrera->getIdCarrera()) ?>"><?php echo $Carrera->getIdCarrera() ?></a></td>
      <td><?php echo $Carrera->getNombre() ?></td>
      <td><?php echo $Carrera->getMaterialIdMaterial() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('carrera/new') ?>">New</a>
