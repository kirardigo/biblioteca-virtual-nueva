<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_persona'       => new sfWidgetFormInputHidden(),
      'domicilio_legal'  => new sfWidgetFormInputText(),
      'domicilio_postal' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_persona'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPersona()), 'empty_value' => $this->getObject()->getIdPersona(), 'required' => false)),
      'domicilio_legal'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'domicilio_postal' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }


}
