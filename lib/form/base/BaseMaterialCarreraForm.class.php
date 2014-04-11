<?php

/**
 * MaterialCarrera form base class.
 *
 * @method MaterialCarrera getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMaterialCarreraForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_material_carrera'  => new sfWidgetFormInputHidden(),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
      'carrera_id_carrera'   => new sfWidgetFormPropelChoice(array('model' => 'Carrera', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_material_carrera'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdMaterialCarrera()), 'empty_value' => $this->getObject()->getIdMaterialCarrera(), 'required' => false)),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
      'carrera_id_carrera'   => new sfValidatorPropelChoice(array('model' => 'Carrera', 'column' => 'id_carrera')),
    ));

    $this->widgetSchema->setNameFormat('material_carrera[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MaterialCarrera';
  }


}
