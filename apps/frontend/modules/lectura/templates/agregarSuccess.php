<h1>Material agregado con exito!</h1>
<?php if ($sf_user->hasFlash('agregado')): ?>
  <div class="flash_notice"><?php echo $sf_user->getFlash('agregado') ?></div>
<?php endif ?>
