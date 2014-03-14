<h1>Anuncios List</h1>

<table>
  <thead>
    <tr>
      <th>Id anuncio</th>
      <th>Archivo</th>
      <th>Informacion</th>
      <th>Fecha anuncio</th>
      <th>Usuario id usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Anuncios as $Anuncio): ?>
    <tr>
      <td><a href="<?php echo url_for('anuncio/edit?id_anuncio='.$Anuncio->getIdAnuncio()) ?>"><?php echo $Anuncio->getIdAnuncio() ?></a></td>
      <td><?php echo $Anuncio->getArchivo() ?></td>
      <td><?php echo $Anuncio->getInformacion() ?></td>
      <td><?php echo $Anuncio->getFechaAnuncio() ?></td>
      <td><?php echo $Anuncio->getUsuarioIdUsuario() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('anuncio/new') ?>">New</a>
