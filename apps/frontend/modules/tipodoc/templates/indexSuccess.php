<h1>Tipos de documentos</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>

      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipodocs as $Tipodoc): ?>
    <tr>

      <td><?php echo $Tipodoc->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('tipodoc/edit?id_tipo_doc='.$Tipodoc->getIdTipodoc()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'tipodoc/delete?id_tipo_doc='.$Tipodoc->getIdTipodoc(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el tipo de documento?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('tipodoc/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
