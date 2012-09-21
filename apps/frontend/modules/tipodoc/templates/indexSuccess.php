<h1>Tipodocs List</h1>

<table>
  <thead>
    <tr>
      <th>Id tipo doc</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipodocs as $Tipodoc): ?>
    <tr>
      <td><a href="<?php echo url_for('tipodoc/edit?id_tipo_doc='.$Tipodoc->getIdTipoDoc()) ?>"><?php echo $Tipodoc->getIdTipoDoc() ?></a></td>
      <td><?php echo $Tipodoc->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipodoc/new') ?>">New</a>
