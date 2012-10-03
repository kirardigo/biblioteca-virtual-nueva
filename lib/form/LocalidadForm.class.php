<?php

/**
 * Localidad form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class LocalidadForm extends BaseLocalidadForm
{
  public function configure()
  {
      $this->widgetSchema['cod_postal']->setLabel('Codigo Postal');
  }
}
