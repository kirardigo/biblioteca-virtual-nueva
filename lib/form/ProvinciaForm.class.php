<?php

/**
 * Provincia form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class ProvinciaForm extends BaseProvinciaForm
{
  public function configure()
  {
      $this->embedRelation('Localidad');
  }
}
