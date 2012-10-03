<?php

/**
 * Domicilio form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class DomicilioForm extends BaseDomicilioForm
{
  public function configure()
  {
      $this->widgetSchema['real']->setLabel('¿Es un domicilio real?');
      $this->widgetSchema['cod_postal']->setLabel('Codigo Postal');
      $this->widgetSchema['localidad_id_localidad']->setLabel('Localidad');
  }
}
