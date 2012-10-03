<h1>Bibliotecas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Persona Juridica</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Bibliotecas as $Biblioteca): ?>
    <tr>
      <td><?php echo $Biblioteca->getIdBiblioteca() ?></td>
      <td><?php echo $Biblioteca->getNombre() ?></td>
      <td><?php echo $Biblioteca->getPjuridica()->getNombre() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('biblioteca/edit?id_biblioteca='.$Biblioteca->getIdBiblioteca()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'biblioteca/delete?id_biblioteca='.$Biblioteca->getIdBiblioteca(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la biblioteca?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 <a class="btn btn-success" href="<?php echo url_for('biblioteca/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
