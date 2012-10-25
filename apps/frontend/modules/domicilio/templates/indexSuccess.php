<h1>Domicilios</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>

      <th>Calle</th>
      <th>Altura</th>
      <th>Cod postal</th>
      <th>Localidad id localidad</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($Domicilios as $Domicilio): ?>
    <tr>

      <td><?php echo $Domicilio->getCalle() ?></td>
      <td><?php echo $Domicilio->getAltura() ?></td>
      <td><?php echo $Domicilio->getCodPostal() ?></td>
      <td><?php echo $Domicilio->getLocalidadIdLocalidad() ?></td>

      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('domicilio/edit?id_domicilio='.$Domicilio->getIdDomicilio()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'domicilio/delete?id_domicilio='.$Domicilio->getIdDomicilio(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el domicilio?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a class="btn btn-success" href="<?php echo url_for('domicilio/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
