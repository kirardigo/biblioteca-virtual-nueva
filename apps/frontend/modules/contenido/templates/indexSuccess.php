<h1>Contenidos List</h1>

<table>
  <thead>
    <tr>
      <th>Id contenido</th>
      <th>Numero contenido</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Contenidos as $Contenido): ?>
    <tr>
      <td><a href="<?php echo url_for('contenido/edit?id_contenido='.$Contenido->getIdContenido()) ?>"><?php echo $Contenido->getIdContenido() ?></a></td>
      <td><?php echo $Contenido->getNumeroContenido() ?></td>
      <td><?php echo $Contenido->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('contenido/new') ?>">New</a>
