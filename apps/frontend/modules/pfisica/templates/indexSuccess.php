<h1>Personas fisicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id pfisica</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Varon</th>
      <th>Fecha nac</th>
      <th>Tipo doc id tipo doc</th>
      <th>Documento</th>
      <th>Persona id persona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Pfisicas as $Pfisica): ?>
    <tr>
      <td><?php echo $Pfisica->getIdPfisica() ?></td>
      <td><?php echo $Pfisica->getNombre() ?></td>
      <td><?php echo $Pfisica->getApellido() ?></td>
      <td><?php echo $Pfisica->getVaron() ?></td>
      <td><?php echo $Pfisica->getFechaNac() ?></td>
      <td><?php echo $Pfisica->getTipoDocIdTipoDoc() ?></td>
      <td><?php echo $Pfisica->getDocumento() ?></td>
      <td><?php echo $Pfisica->getPersonaIdPersona() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('pfisica/edit?id_pfisica='.$Pfisica->getIdPfisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'pfisica/delete?id_pfisica='.$Pfisica->getIdPfisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la persona?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn btn-success" href="<?php echo url_for('pfisica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
