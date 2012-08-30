<h1>Subcontenidos List</h1>

<table>
  <thead>
    <tr>
      <th>Id subcontenido</th>
      <th>Nombre</th>
      <th>Numero subcontenido</th>
      <th>Contenido id contenido</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Subcontenidos as $Subcontenido): ?>
    <tr>
      <td><a href="<?php echo url_for('subcontenido/edit?id_subcontenido='.$Subcontenido->getIdSubcontenido()) ?>"><?php echo $Subcontenido->getIdSubcontenido() ?></a></td>
      <td><?php echo $Subcontenido->getNombre() ?></td>
      <td><?php echo $Subcontenido->getNumeroSubcontenido() ?></td>
      <td><?php echo $Subcontenido->getContenidoIdContenido() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('subcontenido/new') ?>">New</a>
