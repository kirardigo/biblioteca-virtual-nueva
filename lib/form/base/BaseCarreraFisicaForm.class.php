<?php

/**
 * CarreraFisica form base class.
 *
 * @method CarreraFisica getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCarreraFisicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_carrera_fisica'  => new sfWidgetFormInputHidden(),
      'carrera_id_carrera' => new sfWidgetFormPropelChoice(array('model' => 'Carrera', 'add_empty' => false)),
      'pfisica_id_pfisica' => new sfWidgetFormPropelChoice(array('model' => 'Pfisica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_carrera_fisica'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCarreraFisica()), 'empty_value' => $this->getObject()->getIdCarreraFisica(), 'required' => false)),
      'carrera_id_carrera' => new sfValidatorPropelChoice(array('model' => 'Carrera', 'column' => 'id_carrera')),
      'pfisica_id_pfisica' => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica')),
    ));

    $this->widgetSchema->setNameFormat('carrera_fisica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CarreraFisica';
  }


}
