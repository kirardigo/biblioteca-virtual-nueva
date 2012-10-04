
<h2 class="alert-heading offset1">Busqueda de Personas</h2>

<fieldset>    
    <form class="well form-search span3 offset1" action="<?php echo url_for('pfisica/index') ?>" method="POST">
       <label>Nombre</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Nombre" name="nombre"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getNombre()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>
       <label>Apellido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Apellido" name="apellido"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getApellido()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>
       <label>Documento</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Documento" name="documento"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getDocumento()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>

    
       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-info">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>

<h1>Personas fisicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Sexo</th>
      <th>Fecha de Nacimiento</th>
      <th>Tipo de Documento</th>
      <th>Documento</th>
     
    </tr>
  </thead>
  <tbody>
    <?php foreach ($elegido as $Pfisica): ?>
    <tr>
      <td><?php echo $Pfisica->getIdPfisica() ?></td>
      <td><?php echo $Pfisica->getNombre() ?></td>
      <td><?php echo $Pfisica->getApellido() ?></td>
      <?php if($Pfisica->getVaron()){
          echo '<td>Masculino</td>';
      }else{echo '<td>Femenino</td>';}
          
          
          ?>
      
      
      
<!--     1989-03-21-->
      
      <td><?php $cosa= $Pfisica->getFechaNac();
      $m=substr($cosa,5,2);
      $d=substr($cosa,8,2);
      $a=substr($cosa,0,4);
     // $h=substr($cosa,-9,10);
      echo $d.'/'.$m.'/'.$a;
      ?></td>
      
      <td><?php echo $Pfisica->getTipodoc()->getNombre()?></td>
      <td><?php echo $Pfisica->getDocumento() ?></td>
     
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('pfisica/edit?id_pfisica='.$Pfisica->getIdPfisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'pfisica/delete?id_pfisica='.$Pfisica->getIdPfisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la persona?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>
  <a class="btn btn-success" href="<?php echo url_for('pfisica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
