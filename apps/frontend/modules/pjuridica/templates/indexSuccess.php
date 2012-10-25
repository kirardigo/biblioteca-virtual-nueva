<h1>Personas juridicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>

      <th>Nombre</th>
      <th>Razon social</th>
      <th>Cuit/Cuil</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Pjuridicas as $Pjuridica): ?>
    <tr>

      <td><?php echo $Pjuridica->getNombre() ?></td>
      <td><?php echo $Pjuridica->getRazonSocial() ?></td>
      <td><?php echo $Pjuridica->getCuitcuil() ?></td>
      
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('pjuridica/edit?id_pjuridica='.$Pjuridica->getIdPjuridica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'pjuridica/delete?id_pjuridica='.$Pjuridica->getIdPjuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la persona?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('pjuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
