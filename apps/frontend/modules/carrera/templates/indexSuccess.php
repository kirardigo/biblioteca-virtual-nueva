<h1 class="h1info">Carreras</h1>

<table class="table table-bordered">
  <thead >
    <tr>

      <th>Nombre</th>
      
    </tr>
  </thead>
  <tbody >
    <?php foreach ($Carreras as $Carrera): ?>
    <tr>

      <td><?php echo $Carrera->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('carrera/edit?id_carrera='.$Carrera->getIdCarrera()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'carrera/delete?id_carrera='.$Carrera->getIdCarrera(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el carrera?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('carrera/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
