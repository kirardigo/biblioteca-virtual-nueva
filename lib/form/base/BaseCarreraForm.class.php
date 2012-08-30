<?php

/**
 * Carrera form base class.
 *
 * @method Carrera getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCarreraForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_carrera'           => new sfWidgetFormInputHidden(),
      'nombre'               => new sfWidgetFormInputText(),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_carrera'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCarrera()), 'empty_value' => $this->getObject()->getIdCarrera(), 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
    ));

    $this->widgetSchema->setNameFormat('carrera[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Carrera';
  }


}
