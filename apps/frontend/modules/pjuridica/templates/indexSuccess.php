<h1>Pjuridicas List</h1>

<table>
  <thead>
    <tr>
      <th>Id pjuridica</th>
      <th>Razon social</th>
      <th>Persona id persona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Pjuridicas as $Pjuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('pjuridica/edit?id_pjuridica='.$Pjuridica->getIdPjuridica()) ?>"><?php echo $Pjuridica->getIdPjuridica() ?></a></td>
      <td><?php echo $Pjuridica->getRazonSocial() ?></td>
      <td><?php echo $Pjuridica->getPersonaIdPersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pjuridica/new') ?>">New</a>
