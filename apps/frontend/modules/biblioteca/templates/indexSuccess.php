<h1>Bibliotecas List</h1>

<table>
  <thead>
    <tr>
      <th>Id biblioteca</th>
      <th>Nombre</th>
      <th>Pjuridica id pjuridica</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Bibliotecas as $Biblioteca): ?>
    <tr>
      <td><a href="<?php echo url_for('biblioteca/edit?id_biblioteca='.$Biblioteca->getIdBiblioteca()) ?>"><?php echo $Biblioteca->getIdBiblioteca() ?></a></td>
      <td><?php echo $Biblioteca->getNombre() ?></td>
      <td><?php echo $Biblioteca->getPjuridicaIdPjuridica() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('biblioteca/new') ?>">New</a>
