<h1>Acceso al Material</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id</th>
      <th>Usuario que accedió</th>
      <th>Id de Material accedido </th>
      <th>Archivo accedido </th>
      <th>Fecha y hora de acceso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($AccesoMaterials as $AccesoMaterial): ?>
    <tr>
        <td><?php echo $AccesoMaterial->getIdAccesoMaterial() ?></td>
            
      <td><?php echo $AccesoMaterial->getUsuario()->getUsuario() ?></td>
      <td><?php echo $AccesoMaterial->getMaterialIdMaterial() ?></td>
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

