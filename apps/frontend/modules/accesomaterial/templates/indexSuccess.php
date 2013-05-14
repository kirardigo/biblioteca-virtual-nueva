
<h2 class="alert-heading offset1">Busqueda de Acceso al Material</h2>

<fieldset>    
    <form class="well form-search span3 offset1" action="<?php echo url_for('accesomaterial/index') ?>" method="POST">
       <label>Usuario</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Usuario" name="usuario"
       data-source='[<?php foreach($AccesoMaterials as $mat){echo "\"".$mat->getUsuario()->getUsuario()."\"";if($AccesoMaterials->getPosition()< sizeof($AccesoMaterials)-1){echo(",");}}?>]'>
       <label>Material</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Material" name="material"
       data-source='[<?php foreach($AccesoMaterials as $mat){echo "\"".$mat->getMaterial()->getArchivo()."\"";if($AccesoMaterials->getPosition()< sizeof($AccesoMaterials)-1){echo(",");}}?>]'>
      

       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-info">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>







<h1 class="h1info" >Acceso al Material</h1>

<table class="table table-bordered" id='tab666'>
  <thead>
    <tr>
      
      <th>Usuario que accedió</th>
      <th>Archivo accedido </th>
      
      
      <th>Fecha y hora de acceso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($elegido as $AccesoMaterial): ?>
    <tr>
       
            
      <td><?php echo $AccesoMaterial->getUsuario()->getUsuario() ?></td>
      <td><?php echo $AccesoMaterial->getMaterial()->getArchivo() ?></td>
      
      
      <td><?php $cosa= $AccesoMaterial->getFechaAcceso();
      $m=substr($cosa,-14,2);
      $d=substr($cosa,-11,2);
      $a=substr($cosa,-19,4);
      $h=substr($cosa,-9,10);
      echo $d.'/'.$m.'/'.$a.' - '.$h;
      ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>
