<?php

/**
 * CarreraFisica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class CarreraFisicaForm extends BaseCarreraFisicaForm
{
  public function configure()
  {
      $this->widgetSchema['carrera_id_carrera']->setLabel('Carrera');
  }
}
