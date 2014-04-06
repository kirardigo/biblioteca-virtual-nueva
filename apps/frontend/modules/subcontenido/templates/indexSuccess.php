<h1 class="h1info">Subcontenidos</h1>

<table class="table table-bordered">
  

  
  

    <?php foreach ($Contenidos as $Contenido): ?>
      
       
       <thead>             
   <tr>
<tr ><th style="text-align: center; background: black; color: white;" colspan="2"><?php echo $Contenido->getNombre() ?></th></tr>
      <th>Nombre</th>
      <th>Numero subcontenido</th>
      

    </tr></thead>
     <tbody>          
               <?php foreach ($Subcontenidos as $Subcontenido): ?>
      <?php if($Contenido->getNombre()==$Subcontenido->getContenido()->getNombre()) :?>
      
      
      
              <tr>

      <td><?php echo $Subcontenido->getNombre() ?></td>
      <td><?php echo $Subcontenido->getNumeroSubcontenido() ?></td>
      
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('subcontenido/edit?id_subcontenido='.$Subcontenido->getIdSubcontenido()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'subcontenido/delete?id_subcontenido='.$Subcontenido->getIdSubcontenido(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el subcontenido?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>    
              <?php endif; ?>
              <?php endforeach; ?>

    
   
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-inverse" href="<?php echo url_for('subcontenido/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
