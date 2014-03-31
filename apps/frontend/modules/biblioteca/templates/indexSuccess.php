<h1 class= "h1info">Bibliotecas</h1>

<table class="table table-bordered">
  <thead >
    <tr>

      <th>Nombre</th>
      <th>Persona Juridica</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Bibliotecas as $Biblioteca): ?>
    <tr>

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

 <a class="btn btn-inverse" href="<?php echo url_for('biblioteca/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
