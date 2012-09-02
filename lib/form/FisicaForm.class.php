<?php

/**
 * Fisica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class FisicaForm extends BaseFisicaForm
{
  public function configure()
  {
            $this->embedRelation('CarreraFisica');
           // $this->embedRelation('AccesoMaterial');
  }
}
