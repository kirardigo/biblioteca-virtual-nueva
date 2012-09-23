<?php

/**
 * Domicilio form base class.
 *
 * @method Domicilio getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDomicilioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_domicilio'           => new sfWidgetFormInputHidden(),
      'calle'                  => new sfWidgetFormInputText(),
      'altura'                 => new sfWidgetFormInputText(),
      'cod_postal'             => new sfWidgetFormInputText(),
      'localidad_id_localidad' => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'persona_id_persona'     => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_domicilio'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDomicilio()), 'empty_value' => $this->getObject()->getIdDomicilio(), 'required' => false)),
      'calle'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'altura'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_postal'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'localidad_id_localidad' => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id_localidad')),
      'persona_id_persona'     => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona')),
    ));

    $this->widgetSchema->setNameFormat('domicilio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Domicilio';
  }


}
