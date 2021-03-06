<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('pfisica/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_pfisica='.$form->getObject()->getIdPfisica() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: sienna">
      <tr>
        <td colspan="2">
            <?php if ($sf_user->isAuthenticated()):?>
         <a class="btn btn-inverse" href="<?php echo url_for('pfisica/index') ?>">Atras</a>
         <?php else:?>
         <a class="btn btn-inverse" href="<?php echo url_for('principal/index') ?>">Atras</a>
         <?php endif;?>
         <input class="btn btn-inverse" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
