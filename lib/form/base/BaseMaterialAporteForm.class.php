<?php

/**
 * MaterialAporte form base class.
 *
 * @method MaterialAporte getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMaterialAporteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_material_aporte'   => new sfWidgetFormInputHidden(),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
      'aporte_id_aporte'     => new sfWidgetFormPropelChoice(array('model' => 'Aporte', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_material_aporte'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdMaterialAporte()), 'empty_value' => $this->getObject()->getIdMaterialAporte(), 'required' => false)),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
      'aporte_id_aporte'     => new sfValidatorPropelChoice(array('model' => 'Aporte', 'column' => 'id_aporte')),
    ));

    $this->widgetSchema->setNameFormat('material_aporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MaterialAporte';
  }


}
