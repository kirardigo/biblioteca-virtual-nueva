<h1 class="h1info">Personas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>

      <th>Juridica?</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Personas as $Persona): ?>
    <tr>

      <td><?php echo $Persona->getJuridica() ?></td>
      <td><?php echo $Persona->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('persona/edit?id_persona='.$Persona->getIdPersona()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'persona/delete?id_persona='.$Persona->getIdPersona(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la persona?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('persona/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>

