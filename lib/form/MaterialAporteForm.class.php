<?php

/**
 * MaterialAporte form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class MaterialAporteForm extends BaseMaterialAporteForm
{
  public function configure()
  {
      $this->widgetSchema['material_id_material']->setLabel('Material');
  }
}
