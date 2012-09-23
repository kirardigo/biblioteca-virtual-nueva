<?php

/**
 * Pjuridica form base class.
 *
 * @method Pjuridica getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePjuridicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pjuridica'       => new sfWidgetFormInputHidden(),
      'razon_social'       => new sfWidgetFormInputText(),
      'persona_id_persona' => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_pjuridica'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPjuridica()), 'empty_value' => $this->getObject()->getIdPjuridica(), 'required' => false)),
      'razon_social'       => new sfValidatorString(array('max_length' => 45)),
      'persona_id_persona' => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona')),
    ));

    $this->widgetSchema->setNameFormat('pjuridica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pjuridica';
  }


}
