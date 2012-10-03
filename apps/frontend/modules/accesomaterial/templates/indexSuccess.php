<h1>Acceso al Material</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id</th>
      <th>Usuario que accedió</th>
      <th>Id de Material accedido </th>
      <th>Fecha y hora de acceso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($AccesoMaterials as $AccesoMaterial): ?>
    <tr>
        <td><?php echo $AccesoMaterial->getIdAccesoMaterial() ?></td>
            
      <td><?php echo $AccesoMaterial->getUsuario()->getUsuario() ?></td>
      <td><?php echo $AccesoMaterial->getMaterialIdMaterial() ?></td>
      <td><?php echo $AccesoMaterial->getFechaAcceso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

