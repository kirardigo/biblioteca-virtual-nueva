<h1>Libritos List</h1>

<table>
  <thead>
    <tr>
      <th>Id librito</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Libritos as $Librito): ?>
    <tr>
      <td><a href="<?php echo url_for('librito/edit?id_librito='.$Librito->getIdLibrito()) ?>"><?php echo $Librito->getIdLibrito() ?></a></td>
      <td><?php echo $Librito->getName() ?></td>
      <td><?php echo $Librito->getPrice() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('librito/new') ?>">New</a>
