
<h2 style="color: white;" class="alert-heading offset1">Busqueda de Personas</h2>

<fieldset>    
    <form style="background: sienna;"class="well form-search span3 offset1" action="<?php echo url_for('pfisica/index') ?>" method="POST">
       <label class="busqueda">Nombre</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Nombre" name="nombre"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getNombre()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>
       <label class="busqueda">Apellido</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Apellido" name="apellido"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getApellido()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>
       <label class="busqueda">Documento</label>
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Documento" name="documento"
       data-source='[<?php foreach($Pfisicas as $mat){echo "\"".$mat->getDocumento()."\"";if($Pfisicas->getPosition()< sizeof($Pfisicas)-1){echo(",");}}?>]'>

    
       
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
       <button type="submit" class="btn btn-inverse">Buscar</button>
    </form>
</fieldset>
<br>



<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>

<h1 class ="h1info">Personas fisicas validas</h1>


<div id="paging_container3" class="container">

    <div  class="alt_page_navigation"></div><br></br>


<table class="table table-bordered">
  <thead >
    <tr>

      
      <th>Apellido</th>
     <th>Nombre</th>
      <th>Sexo</th>
      <th>Fecha de Nacimiento</th>
      <th>Tipo de Documento</th>
      <th>Documento</th>
     
    </tr>
  </thead>

    <?php foreach ($elegido as $Pfisica): ?>
          <tbody class="alt_content">
    <tr>


      <td><?php echo $Pfisica->getApellido() ?></td>
            <td><?php echo $Pfisica->getNombre() ?></td>
            

      
      <?php if($Pfisica->getVaron()){
          echo '<td>MASCULINO</td>';
      }else{echo '<td>FEMENINO</td>';}
          
          
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
    </tr></tbody>
    <?php endforeach; ?>
</table> 
   </div>
<?php endif;?>

<br>


<?php 
    $cant = sizeof($elegido2);
    if($cant >= 1):?>

<h1 class ="h1info">Personas fisicas NO validas</h1>


<div id="paging_container4" class="container">

    <div  class="alt_page_navigation"></div><br></br>


<table class="table table-bordered">
  <thead >
    <tr>


      <th>Apellido</th>
      <th>Nombre</th>
      <th>Sexo</th>
      <th>Fecha de Nacimiento</th>
      <th>Tipo de Documento</th>
      <th>Documento</th>
     
    </tr>
  </thead>

    <?php foreach ($elegido2 as $Pfisica): ?>
          <tbody class="alt_content">
    <tr>


      <td><?php echo $Pfisica->getApellido() ?></td>
      
                <td><?php echo $Pfisica->getNombre() ?></td>  
            
      
      <?php if($Pfisica->getVaron()){
          echo '<td>MASCULINO</td>';
      }else{echo '<td>FEMENINO</td>';}
          
          
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
    </tbody><?php endforeach; ?></table> 
   </div>
<?php endif;?>

<br>



  <a class="btn btn-inverse" href="<?php echo url_for('pfisica/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar</a>
