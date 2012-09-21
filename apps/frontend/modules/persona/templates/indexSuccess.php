<h1>Personas List</h1>

<table>
  <thead>
    <tr>
      <th>Id persona</th>
      <th>Domicilio legal</th>
      <th>Domicilio postal</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Personas as $Persona): ?>
    <tr>
      <td><a href="<?php echo url_for('persona/edit?id_persona='.$Persona->getIdPersona()) ?>"><?php echo $Persona->getIdPersona() ?></a></td>
      <td><?php echo $Persona->getDomicilioLegal() ?></td>
      <td><?php echo $Persona->getDomicilioPostal() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('persona/new') ?>">New</a>
