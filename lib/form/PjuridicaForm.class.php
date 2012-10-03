<?php

/**
 * Pjuridica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class PjuridicaForm extends BasePjuridicaForm
{
  public function configure()
  {
      $this->embedRelation('DomicilioJ');
      $this->widgetSchema['cuit_cuil']->setLabel('Cuit / Cuil');
     
  }
}
