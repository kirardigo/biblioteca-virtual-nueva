<h1>Libritopdfs List</h1>

<table>
  <thead>
    <tr>
      <th>Id librito pdf</th>
      <th>Filename</th>
      <th>Caption</th>
      <th>Librito id librito</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Libritopdfs as $Libritopdf): ?>
    <tr>
      <td><a href="<?php echo url_for('libritopdf/edit?id_librito_pdf='.$Libritopdf->getIdLibritoPdf()) ?>"><?php echo $Libritopdf->getIdLibritoPdf() ?></a></td>
      <td><?php echo $Libritopdf->getFilename() ?></td>
      <td><?php echo $Libritopdf->getCaption() ?></td>
      <td><?php echo $Libritopdf->getLibritoIdLibrito() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('libritopdf/new') ?>">New</a>
