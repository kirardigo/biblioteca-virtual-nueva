<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('pjuridica/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_pjuridica='.$form->getObject()->getIdPjuridica() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: sienna">
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-inverse" href="<?php echo url_for('pjuridica/index') ?>">Atras</a>
          <?php if (!$form->getObject()->isNew()): ?>
            
          <?php endif; ?>
                 <input class="btn btn-inverse" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
