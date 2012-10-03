<?php

/**
 * DomicilioJ form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class DomicilioJForm extends BaseDomicilioJForm
{
  public function configure()
  {
      $this->widgetSchema['real']->setLabel('¿Es un domicilio real?');
      $this->widgetSchema['cod_postal']->setLabel('Codigo Postal');
      $this->widgetSchema['localidad_id_localidad']->setLabel('Localidad');
  }
}
