<h1>Acceso al Material</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id acceso material</th>
      <th>Fisica id fisica</th>
      <th>Material id material</th>
      <th>Fecha acceso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($AccesoMaterials as $AccesoMaterial): ?>
    <tr>
        <td><?php echo $AccesoMaterial->getIdAccesoMaterial() ?></td>
            
      <td><?php echo $AccesoMaterial->getFisica()->getNombre() ?></td>
      <td><?php echo $AccesoMaterial->getMaterialIdMaterial() ?></td>
      <td><?php echo $AccesoMaterial->getFechaAcceso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

