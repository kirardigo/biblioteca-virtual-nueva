<?php

/**
 * Biblioteca form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class BibliotecaForm extends BaseBibliotecaForm
{
  public function configure()
  {
      $this->widgetSchema['pjuridica_id_pjuridica']->setLabel('Persona Juridica');
  }
}
