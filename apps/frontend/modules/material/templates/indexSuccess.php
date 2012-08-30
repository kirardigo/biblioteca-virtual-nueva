<h1>Materials List</h1>

<table>
  <thead>
    <tr>
      <th>Id material</th>
      <th>Archivo</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Editorial</th>
      <th>Autor</th>
      <th>Descripcion</th>
      <th>Subcontenido id subcontenido</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Materials as $Material): ?>
    <tr>
      <td><a href="<?php echo url_for('material/edit?id_material='.$Material->getIdMaterial()) ?>"><?php echo $Material->getIdMaterial() ?></a></td>
      <td><?php echo $Material->getArchivo()  ?></td>
      <td><?php echo link_to('descargar archivo', 'material/descargarArchivo?archivito='.$Material->getArchivo()); ?></td>
      <td><?php echo $Material->getNombre() ?></td>
      <td><?php echo $Material->getTitulo() ?></td>
      <td><?php echo $Material->getEditorial() ?></td>
      <td><?php echo $Material->getAutor() ?></td>
      <td><?php echo $Material->getDescripcion() ?></td>
      <td><?php echo $Material->getSubcontenidoIdSubcontenido() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('material/new') ?>">New</a>
