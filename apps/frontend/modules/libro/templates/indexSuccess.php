<h1>Libros List</h1>

<table>
  <thead>
    <tr>
      <th>Idlibro</th>
      <th>Nombre</th>
      <th>Archivo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Libros as $Libro): ?>
    <tr>
      <td><a href="<?php echo url_for('libro/edit?idlibro='.$Libro->getIdlibro()) ?>"><?php echo $Libro->getIdlibro() ?></a></td>
      <td><?php echo $Libro->getNombre() ?></td>
      <td><?php echo $Libro->getArchivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('libro/new') ?>">New</a>
