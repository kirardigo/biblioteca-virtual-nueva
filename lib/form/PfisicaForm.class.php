<?php

/**
 * Pfisica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class PfisicaForm extends BasePfisicaForm
{
  public function configure()
  {
      $this->embedRelation('Usuario');
  }
}
